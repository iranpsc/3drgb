<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ProductReview extends Component
{
    public Product $product;

    #[Rule('required|min:3|max:500')]
    public $comment;

    #[Rule('required|integer|between:1,5')]
    public $rating;

    public function saveReview()
    {
        $this->validate();

        $this->authorize('addReview', $this->product);

        $this->product->reviews()->create([
            'user_id' => auth()->id(),
            'comment' => $this->comment,
            'rating' => $this->rating,
        ]);

        $this->reset(['comment', 'rating']);

        session()->flash('message', 'نظر شما با موفقیت ثبت شد و پس از تایید نمایش داده خواهد شد.');
    }

    public function deleteReview($reviewId)
    {
        $review = $this->product->reviews()->findOrFail($reviewId);

        $this->authorize('deleteReview', $this->product);

        $review->delete();

        session()->flash('message', 'نظر با موفقیت حذف شد.');
    }

    public function approveReview($reviewId)
    {
        $review = $this->product->reviews()->findOrFail($reviewId);

        $this->authorize('approveReview', $this->product);

        $review->approve(auth()->user()->name);

        session()->flash('message', 'نظر با موفقیت تایید شد.');
    }


    public function render()
    {
        return view('livewire.product-review');
    }
}
