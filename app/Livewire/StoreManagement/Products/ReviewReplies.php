<?php

namespace App\Livewire\StoreManagement\Products;

use App\Models\Review;
use App\Models\ReviewReply;
use Livewire\Attributes\Title;
use Livewire\Component;

class ReviewReplies extends Component
{
    public Review $review;

    public function mount()
    {
        $this->review->load('replies.user');
    }

    public function approve(ReviewReply $reviewReply)
    {
        $reviewReply->approve(auth()->user()->name);

        session()->flash('message', 'پاسخ با موفقیت تایید شد.');
    }

    public function delete(ReviewReply $reviewReply)
    {
        $reviewReply->delete();

        session()->flash('message', 'پاسخ با موفقیت حذف شد.');
    }

    #[Title('پاسخ های دیدگاه')]
    public function render()
    {
        return view('livewire.store-management.products.review-replies');
    }
}
