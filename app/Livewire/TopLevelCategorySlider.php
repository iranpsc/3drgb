<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class TopLevelCategorySlider extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::whereNull('parent_id')->with('image')->get();
    }
}
