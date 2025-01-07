<?php

namespace App\Livewire\StoreManagement\Categories;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    public function delete(Category $category)
    {
        $this->authorize('delete', $category);

        $category->children()->delete();
        $category->delete();

        session()->flash('message', 'دسته بندی با موفقیت حذف شد');
    }

    #[Title('دسته‌بندی‌ها')]
    public function render()
    {
        return view('livewire.store-management.categories.categories')
        ->with('categories', Category::with('parent')->paginate(10));
    }
}
