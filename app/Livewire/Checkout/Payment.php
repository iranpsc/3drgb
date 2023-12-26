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

    public function mount()
    {
        $cartItems = session()->get('cart');

        $this->products = Product::whereIn('id', $cartItems)->get();
    }

    public function goBack()
    {
        $this->dispatch('move-to-create-account')->to(Checkout::class);
    }

    public function pay()
    {
        $amount = $this->products->sum('final_price');

        $order = Order::create([
            'user_id' => auth()->id(),
            'amount' => $amount,
            'tracking_id' => random_int(10000000000, 99999999999)
        ]);

        foreach ($this->products as $product) {
            $orderItems[] = [
                'order_id' => $order->id,
                'product_id' => $product->id,
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

    public function render()
    {
        return view('livewire.checkout.payment');
    }
}
