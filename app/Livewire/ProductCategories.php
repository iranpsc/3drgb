<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCategories extends Component
{
    use WithPagination;

    #[Title('دسته بندی محصولات')]
    public function render()
    {
        return view('livewire.product-categories', [
            'categories' => Category::with('parent', 'image')->whereHas('products', function ($query) {
                $query->published()->createdByAdmin();
            })->withCount('products')->orderByDesc('products_count')->paginate(12)
        ]);
    }
}
