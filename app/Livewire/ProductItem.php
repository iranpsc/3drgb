<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductItem extends Component
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

        $cartProductsCount = count(session()->get('cart', []));

        $this->dispatch('cartUpdated', compact('cartProductsCount'));

        session()->flash('message', $this->product->name . ' به سبد خرید اضافه شد.');
    }

    public function purchase()
    {
        if (!in_array($this->product->id, session()->get('cart', []))) {
            session()->push('cart', $this->product->id);
        }

        return $this->redirect('/checkout');
    }

    public function download()
    {
        if(!auth()->check()) {
            return $this->redirectRoute('login');
        }

        $this->authorize('download', $this->product);
        return response()->download(storage_path('app/' . $this->product->file->path));
    }
}
