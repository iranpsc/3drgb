<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Reviews extends Component
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
}
