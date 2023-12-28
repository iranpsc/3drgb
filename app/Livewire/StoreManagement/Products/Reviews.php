<?php

namespace App\Livewire\StoreManagement\Products;

use App\Models\Review;
use Livewire\Attributes\Title;
use Livewire\Component;

class Reviews extends Component
{
    public function approve(Review $review)
    {
        $review->approve(auth()->user()->name);

        session()->flash('message', 'دیدگاه با موفقیت تایید شد.');
    }

    public function delete(Review $review)
    {
        $review->delete();

        session()->flash('message', 'دیدگاه با موفقیت حذف شد.');
    }

    #[Title('دیدگاه های کاربران')]
    public function render()
    {
        return view('livewire.store-management.products.reviews')
            ->with('reviews', Review::with(['product:id,name', 'user:id,name'])->paginate(10));
    }
}
