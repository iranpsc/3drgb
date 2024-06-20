<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SimilarProducts extends Component
{
    public Category $category;
    public Product $product;

    public $products;

    public function mount()
    {
        $this->products = $this->category->products()
            ->where('id', '!=', $this->product->id)
            ->inRandomOrder()
            ->with('category.parent', 'oldestImage')
            ->limit(10)
            ->get();
    }

    public function render()
    {
        return view('livewire.similar-products');
    }
}
