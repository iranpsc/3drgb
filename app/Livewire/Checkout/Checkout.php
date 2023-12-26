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
    public $cart = [];

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
        $this->cart = session()->get('cart', []);

        $this->products = Product::whereIn('id', $this->cart)->get();

        if (count($this->cart) == 0 && count($this->products) == 0) {
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
