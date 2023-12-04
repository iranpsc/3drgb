<?php

namespace App\Livewire\StoreManagement\Products;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('success', 'محصول با موفقیت حذف شد.');
    }   
    
    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store-management.products.products')
        ->with('products', Product::paginate(10));
    }
}
