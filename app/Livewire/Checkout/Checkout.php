<?php

namespace App\Livewire\Checkout;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Product;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;

class Checkout extends Component
{
    #[Locked]
    public $cart_items = [];

    #[Locked]
    public $products;

    #[Locked]
    public $current;

    protected $steps = [
        'checkout.create-account',
        'checkout.payment'
    ];

    public function mount()
    {
        $this->cart_items = session()->get('cart', []);
        $products_ids = array_column($this->cart_items, 'product_id');

        $this->products = Product::whereIn('id', $products_ids)->get();

        if (count($this->cart_items) == 0 && count($this->products) == 0) {
            return $this->redirectRoute('cart');
        }


        if (!auth()->check()) {
            $this->current = $this->steps[0];
        } else {
            $this->current = $this->steps[1];
        }
    }

    #[On('move-to-create-account')]
    public function backToCreateAccount()
    {
        if (!auth()->check()) {
            $this->current = $this->steps[0];
        } else {
            $this->redirectRoute('cart');
        }
    }

    #[On('move-to-payment')]
    public function accountCreated()
    {
        $this->current = $this->steps[1];
    }

    #[Title('تسویه حساب')]
    public function render()
    {
        return view('livewire.checkout.checkout');
    }
}
