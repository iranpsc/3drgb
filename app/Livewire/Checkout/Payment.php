<?php

namespace App\Livewire\Checkout;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Payment extends Component
{
    #[Locked]
    public $products;

    #[Locked]
    public $cart_items;

    public function mount()
    {
        $this->cart_items = session()->get('cart');
        $products_ids = array_column($this->cart_items, 'product_id');
        $this->products = Product::whereIn('id', $products_ids)->with('latestImage')->get();
    }

    public function goBack()
    {
        $this->dispatch('move-to-create-account')->to(Checkout::class);
    }

    public function pay()
    {
        $amount = $this->calculateTotalPrice();

        $order = Order::create([
            'user_id' => auth()->id(),
            'amount' => $amount,
            'tracking_id' => random_int(10000000000, 99999999999)
        ]);

        foreach ($this->products as $product) {
            $cart_item = $this->getCartItem($product->id);
            $orderItems[] = [
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $cart_item['quantity'],
            ];
        }

        OrderItem::insert($orderItems);

        $response = zarinpal()
            ->amount($amount)
            ->request()
            ->description('transaction info')
            ->callbackUrl(route('verify'))
            ->send();

        if (!$response->success()) {
            session()->flash('error', $response->error()->message());
            return;
        }

        $order->transaction()->create([
            'authority' => $response->authority(),
            'amount' => $amount,
        ]);

        $this->reset('products');
        session()->forget('cart');

        return redirect()->to($response->url());
    }

    private function calculateTotalPrice()
    {
        $total_price = 0;

        foreach ($this->products as $product) {
            $cart_item = $this->getCartItem($product->id);
            $quantity = $cart_item['quantity'];
            $total_price += $product->final_price * $quantity;
        }

        return $total_price;
    }

    private function getCartItem(int $productId)
    {
        return collect($this->cart_items)
            ->where('product_id', $productId)
            ->first();
    }

    public function render()
    {
        return view('livewire.checkout.payment');
    }
}
