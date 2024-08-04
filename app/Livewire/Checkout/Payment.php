<?php

namespace App\Livewire\Checkout;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Payment extends Component
{
    #[Locked]
    public $products;

    #[Locked]
    public $cart_items;

    private const PRICE_MULTIPLIER = 10;

    public function mount(): void
    {
        $this->cart_items = session()->get('cart', []);
        $products_ids = array_column($this->cart_items, 'product_id');
        $this->products = Product::whereIn('id', $products_ids)->with('latestImage')->get();
    }

    public function goBack(): void
    {
        $this->dispatch('move-to-create-account')->to(Checkout::class);
    }

    public function pay(): void
    {
        try {
            $amount = $this->calculateTotalPrice() * self::PRICE_MULTIPLIER;

            $order = Order::create([
                'user_id' => auth()->id(),
                'amount' => $amount,
                'tracking_id' => random_int(10000000000, 99999999999),
            ]);

            $orderItems = $this->prepareOrderItems($order->id);
            OrderItem::insert($orderItems);

            $response = $this->sendPaymentRequest($amount, $order->tracking_id);

            if (!$response->success()) {
                session()->flash('error', $response->error()->message());
                return;
            }

            $order->transaction()->create([
                'token' => $response->token(),
                'amount' => $amount,
            ]);

            $this->reset('products');
            session()->forget('cart');

            $this->redirect($response->url());
        } catch (\Exception $e) {
            Log::error('Payment failed: ' . $e->getMessage());
            session()->flash('error', 'پرداخت با مشکل مواجه شد. لطفا مجددا تلاش کنید.');
        }
    }

    private function calculateTotalPrice(): float
    {
        $total_price = 0;

        foreach ($this->products as $product) {
            $cart_item = $this->getCartItem($product->id);
            $quantity = $cart_item['quantity'];
            $total_price += $product->final_price * $quantity;
        }

        return $total_price;
    }

    private function getCartItem(int $productId): array
    {
        return collect($this->cart_items)
            ->where('product_id', $productId)
            ->first();
    }

    private function prepareOrderItems(int $orderId): array
    {
        $orderItems = [];

        foreach ($this->products as $product) {
            $cart_item = $this->getCartItem($product->id);
            $orderItems[] = [
                'order_id' => $orderId,
                'product_id' => $product->id,
                'quantity' => $cart_item['quantity'],
            ];
        }

        return $orderItems;
    }

    private function sendPaymentRequest(float $amount, int $trackingId)
    {
        return parsian()
            ->amount($amount)
            ->orderId($trackingId)
            ->request()
            ->callbackUrl(route('callback'))
            ->send();
    }

    public function render()
    {
        return view('livewire.checkout.payment');
    }
}
