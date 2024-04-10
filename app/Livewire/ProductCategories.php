<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use App\Models\Category;
use Livewire\Component;

class ProductCategories extends Component
{
    #[Title('دسته بندی محصولات')]
    public function render()
    {
        return view('livewire.product-categories', [
            'categories' => Category::with('parent', 'image')->whereHas('products', function ($query) {
                $query->published();
            })->withCount('products')->orderByDesc('products_count')->get()
        ]);
    }
}
