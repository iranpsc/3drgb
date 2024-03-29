<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    public Product $product;

    public function mount()
    {
        $this->product = $this->product->load([
            'images',
            'reviews.user',
            'tags',
            'attributes',
            'category',
        ])
            ->loadCount('reviews')
            ->loadAvg('reviews as rating_avg', 'rating');
    }

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
        $this->authorize('download', $this->product);
        return response()->download(storage_path('app/' . $this->product->file->path));
    }

    public function render()
    {
        return view('livewire.product-details')
            ->title($this->product->name);
    }
}
