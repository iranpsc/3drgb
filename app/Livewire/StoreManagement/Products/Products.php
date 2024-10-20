<?php

namespace App\Livewire\StoreManagement\Products;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search;

    private $products;

    public function updatedSearch()
    {
        $this->resetPage();

        $this->products = Product::where('name', 'like', "%{$this->search}%")
            ->orderByDesc('sku')
            ->paginate(10);
    }

    public function delete(Product $product)
    {
        $this->authorize('delete', $product);

        $product->delete();
        $product->images()->delete();

        session()->flash('success', __('Product deleted successfully.'));
    }

    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store-management.products.products', [
            'products' => $this->products ?? Product::orderByDesc('sku')->paginate(10)
        ]);
    }
}
