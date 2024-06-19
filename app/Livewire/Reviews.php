<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Reviews extends Component
{
    public Product $product;

    #[Rule('required|min:3|max:500')]
    public $comment;

    #[Rule('required|integer|between:1,5')]
    public $rating;

    public $reviewReplyText;

    public function mount()
    {
        $this->product->loadCount([
            'reviews as five_star_reviews_count' => fn ($query) => $query->where('rating', 5),
            'reviews as four_star_reviews_count' => fn ($query) => $query->where('rating', 4),
            'reviews as three_star_reviews_count' => fn ($query) => $query->where('rating', 3),
            'reviews as two_star_reviews_count' => fn ($query) => $query->where('rating', 2),
            'reviews as one_star_reviews_count' => fn ($query) => $query->where('rating', 1),
        ]);
    }

    public function saveReview()
    {
        $this->validate();

        if (!auth()->check()) {
            return $this->redirectRoute('login');
        }

        $this->authorize('addReview', $this->product);

        $this->product->reviews()->create([
            'user_id' => auth()->id(),
            'comment' => $this->comment,
            'rating' => $this->rating,
        ]);

        $this->reset(['comment', 'rating']);

        session()->flash('message', 'نظر شما با موفقیت ثبت شد و پس از تایید نمایش داده خواهد شد.');
    }

    public function saveReviewReply(Review $review)
    {
        $this->validate([
            'reviewReplyText' => 'required|string|min:3|max:500',
        ]);

        if (!auth()->check()) {
            return $this->redirectRoute('login');
        }

        $review->replies()->create([
            'user_id' => auth()->id(),
            'comment' => $this->reviewReplyText,
        ]);

        $this->reset('reviewReplyText');

        session()->flash('message', 'پاسخ شما با موفقیت ثبت شد و پس از تایید نمایش داده خواهد شد.');
    }

    public function likeReview(Review $review)
    {
        if (!auth()->check()) {
            return $this->redirectRoute('login');
        }

        $review->likes()->updateOrCreate([
            'user_id' => auth()->id(),
        ], [
            'type' => 'like',
            'ip' => request()->ip(),
        ]);
    }

    public function render()
    {
        return view('livewire.reviews', [
            'users_count' => User::count(),
        ]);
    }
}
