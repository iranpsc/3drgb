<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ProductCategory extends Component
{
    public $category;

    public function mount(string $categories = null)
    {
        $categories = explode('/', $categories);
        $category = $categories[count($categories) - 1];

        $this->category = Category::where('slug', $category)
            ->with('parent', 'children', 'image')->first();
    }

    public function render()
    {
        return view('livewire.product-category')
            ->title($this->category->name);
    }
}
