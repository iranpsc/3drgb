<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    public Product $product;

    public function addToCart()
    {
        // check if product is already in cart
        if (in_array($this->product->id, session()->get('cart', []))) {
            session()->flash('message', $this->product->name . ' قبلا به سبد خرید اضافه شده است.');
            return;
        }

        session()->push('cart', $this->product->id);

        session()->flash('message', $this->product->name . ' به سبد خرید اضافه شد.');
    }

    public function purchase()
    {
        if (!in_array($this->product->id, session()->get('cart', []))) {
            session()->push('cart', $this->product->id);
        }

        return $this->redirect('/checkout');
    }

    public function render()
    {
        return view('livewire.product-details')
            ->title($this->product->name);
    }
}
