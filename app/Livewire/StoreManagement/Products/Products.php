<?php

namespace App\Livewire\StoreManagement\Products;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

class Products extends Component
{
    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store-management.products.products')
        ->with('products', Product::with('category', 'tags')->paginate(10));
    }
}
