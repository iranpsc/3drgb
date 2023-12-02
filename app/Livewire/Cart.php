<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Locked;

class Cart extends Component
{
    #[Locked]
    public $cart = [];

    #[Locked]
    public $products = [];

    public function mount()
    {
        $this->cart = session()->get('cart', []);

        $this->products = Product::whereIn('id', $this->cart)->get();
    }

    public function removeFromCart($productId)
    {
        $this->cart = array_filter($this->cart, function ($id) use ($productId) {
            return $id !== $productId;
        });

        session()->put('cart', $this->cart);

        $this->products = Product::whereIn('id', $this->cart)->get();

        session()->flash('message', 'محصول از سبد خرید حذف شد.');
    }

    public function checkout()
    {
        if (count($this->cart) === 0) {
            return;
        }

        return $this->redirect('/checkout');
    }

    #[Title('سبد خرید')]
    public function render()
    {
        return view('livewire.cart');
    }
}
