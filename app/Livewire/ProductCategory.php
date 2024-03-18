<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ProductCategory extends Component
{
    public $category_link, $category;

    public function mount(string $category_link = null)
    {
        $this->category_link = explode('/', $category_link);
        $category = $this->category_link[count($this->category_link) - 1];

        $this->category = Category::where('slug', $category)->with('children', 'image')->first();
    }

    public function render()
    {
        return view('livewire.product-category')
            ->title($this->category->name);
    }
}
