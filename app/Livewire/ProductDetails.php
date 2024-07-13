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
        ])->loadCount([
            'reviews as approved_reviews_count' => fn ($query) => $query->where('approved', 1),
            'likes',
            'likes as user_liked' => fn ($query) => $query->where('user_id', auth()->id()),
            'bookmarks as user_bookmarked' => fn ($query) => $query->where('user_id', auth()->id()),
        ])->loadAvg('reviews as rating_avg', 'rating');
    }

    public function addToCart(int $quantity = 1)
    {
        // check if product is already in cart
        if (in_array($this->product->id, array_column(session('cart', []), 'product_id'))) {
            session()->flash('message', $this->product->name . ' قبلا به سبد خرید اضافه شده است.');
            return;
        }

        session()->push('cart', [
            'product_id' => $this->product->id,
            'quantity' => $quantity
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

    public function toggleLike()
    {
        if (!auth()->check()) {
            return $this->redirectRoute('login');
        }

        if ($this->product->likes()->where('user_id', auth()->user()->id)->exists()) {
            $this->product->likes()->where('user_id', auth()->user()->id)->delete();
        } else {
            $this->product->likes()->create([
                'user_id' => auth()->user()->id,
                'type' => 'like',
                'ip' => request()->ip(),
            ]);
        }
    }

    public function toggleBookmark()
    {
        if (!auth()->check()) {
            return $this->redirectRoute('login');
        }

        if ($this->product->bookmarks()->where('user_id', auth()->user()->id)->exists()) {
            $this->product->bookmarks()->where('user_id', auth()->user()->id)->delete();
        } else {
            $this->product->bookmarks()->create([
                'user_id' => auth()->user()->id,
                'type' => 'bookmark',
                'ip' => request()->ip(),
            ]);
        }
    }

    public function render()
    {
        return view('livewire.product-details')
            ->title($this->product->name);
    }
}
