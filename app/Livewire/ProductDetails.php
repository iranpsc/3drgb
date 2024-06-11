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
            'attributes' => function ($query) {
                $query->whereNotNull('value')
                    ->whereNot('value', '-');
            },
            'category',
        ])->loadCount('reviews')->loadAvg('reviews as rating_avg', 'rating');
    }

    public function addToCart()
    {
        // check if product is already in cart
        if (in_array($this->product->id, array_column(session('cart', []), 'product_id'))) {
            session()->flash('message', $this->product->name . ' قبلا به سبد خرید اضافه شده است.');
            return;
        }

        session()->push('cart', [
            'product_id' => $this->product->id,
            'quantity' => 1
        ]);

        $cartProductsCount = count(session()->get('cart', []));

        $this->dispatch('cartUpdated', compact('cartProductsCount'));

        session()->flash('message', $this->product->name . ' به سبد خرید اضافه شد.');
    }

    public function download()
    {
        if (!auth()->check()) {
            return $this->redirectRoute('login');
        }

        $this->authorize('download', $this->product);
        return response()->download(storage_path('app/' . $this->product->file->path));
    }

    public function render()
    {
        return view('livewire.product-details')
            ->title($this->product->name);
    }
}
