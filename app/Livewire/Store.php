<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;

class Store extends Component
{
    use WithPagination;

    public $search;

    private $products;

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

    #[Computed(persist: true)]
    public function categories()
    {
        return Category::select('id', 'name')->withCount('products')->get();
    }

    #[Title('فروشگاه')]
    public function render()
    {
        return view('livewire.store')
            ->with([
                'products' => $this->products ?? Product::published()->orderByDesc('created_at')->paginate(12),
            ]);
    }
}
