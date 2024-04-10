<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ProductCategory extends Component
{
    public $category_link, $category;

    private $products;

    public function mount(string $category_link = null)
    {
        $this->category_link = explode('/', $category_link);
        $category = $this->category_link[count($this->category_link) - 1];

        $this->category = Category::where('slug', $category)->with('children', 'image')->first();

        if (count($this->category->children) == 0) {
            $this->products = $this->category->products()
                ->published()
                ->withCount('reviews')
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('latestImage')
                ->latest()
                ->paginate(16);
        }
    }

    public function render()
    {
        return view('livewire.product-category', [
            'products' => $this->products,
        ])->title($this->category->name);
    }
}
