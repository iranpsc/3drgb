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

    public function updatedSearch()
    {
        $this->resetPage();

        $this->products = Product::published()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(12);
    }

    public function purchase($productId)
    {
        if(! in_array($productId, session()->get('cart', []))) {
            session()->push('cart', $productId);
        }

        return $this->redirect('/checkout');
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
