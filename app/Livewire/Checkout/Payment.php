<?php

namespace App\Livewire\Checkout;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Illuminate\Support\Str;

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
        $order = Order::create([
            'user_id' => auth()->id(),
            'amount' => $this->products->sum('final_price'),
            'tracking_id' => Str::random(16)
        ]);

        foreach ($this->products as $product) {
            $orderItems[] = [
                'order_id' => $order->id,
                'product_id' => $product->id,
            ];
        }

        OrderItem::insert($orderItems);

        $response = zarinpal()
            ->amount($this->products->sum('final_price'))
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
            'amount' => $this->products->sum('final_price'),
        ]);

        $this->reset('products');
        session()->forget('cart');

        $this->redirect('https://www.zarinpal.com/pg/StartPay/' . $response->authority());
    }

    public function render()
    {
        return view('livewire.checkout.payment');
    }
}
