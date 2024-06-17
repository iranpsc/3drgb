<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewReplies extends Component
{
    public Review $review;

    public function approve($reply)
    {
        $reply->approve(auth()->user()->name);

        session()->flash('message', 'پاسخ با موفقیت تایید شد.');
    }

    public function disapprove($reply)
    {
        $reply->disapprove();

        session()->flash('message', 'پاسخ با موفقیت رد شد.');
    }

    public function render()
    {
        return view('livewire.review-replies');
    }
}
