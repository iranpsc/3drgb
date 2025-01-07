<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCategory extends Component
{
    use WithPagination;

    public $category_link, $category;

    public function mount(string $category_link = null)
    {
        $this->category_link = explode('/', $category_link);
        $category = $this->category_link[count($this->category_link) - 1];

        $this->category = Category::where('slug', $category)->with('children', 'image')->first();
    }

    private function getProducts()
    {
        if (count($this->category->children ?? []) == 0) {
            return $this->category->products()
                ->published()
                ->createdByAdmin()
                ->withCount('reviews')
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('oldestImage')
                ->latest()
                ->paginate(16);
        }

        return collect(); // Return an empty collection if there are children
    }

    public function render()
    {
        return view('livewire.product-category', [
            'products' => $this->getProducts(),
        ])->title($this->category->name);
    }
}
