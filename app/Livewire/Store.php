<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Store extends Component
{
    use WithPagination;

    public $search;
    private $products;
    
    /**
     * Add product to cart.
     * 
     * @param int $productId
     * @return void
     */
    public function addToCart($productId)
    {
        // check if product is already in cart
        if (in_array($productId, session()->get('cart', []))) {
            session()->flash('message', $this->product->name . ' قبلا به سبد خرید اضافه شده است.');
            return;
        }

        session()->push('cart', $productId);

        session()->flash('message', 'محصول به سبد خرید اضافه شد.');
    }

    /**
     * Search for products.
     * 
     * @return void
     */
    public function updatedSearch()
    {
        $this->resetPage();

        $this->products = Product::published()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(12);
    }

    /**
     * Purchase the product.
     * 
     * @param int $productId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function purchase($productId)
    {
        if(! in_array($productId, session()->get('cart', []))) {
            session()->push('cart', $productId);
        }

        return $this->redirect('/checkout');
    }

    /**
     * Download the product file.
     * 
     * @param \App\Models\Product $product
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download(Product $product)
    {
        $this->authorize('download', $product);
        return response()->download(storage_path('app/' . $product->file->path));
    }

    #[Title('فروشگاه')]
    public function render()
    {
        return view('livewire.store')
        ->with([
            'products' => $this->products ?? Product::published()->orderByDesc('created_at')->paginate(12),
            'categories' => Category::select('id', 'name')->withCount('products')->get(),
        ]);
    }
}
