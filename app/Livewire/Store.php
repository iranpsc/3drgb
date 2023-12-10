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

    public $orderBy = [
        'newest' => true,
        'cheepest' => false,
        'most-expensive' => false,
        'most-sales' => false,
    ];

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

    public function getPorductsByCategory($id)
    {
        $this->resetPage();

        $this->products = Product::published()
            ->where('category_id', $id)
            ->paginate(12);
    }

    public function sortBy(string $orderBy)
    {
        $this->resetPage();

        $this->orderBy = [
            'newest' => false,
            'cheepest' => false,
            'most-expensive' => false,
            'most-sales' => false,
        ];

        $this->orderBy[$orderBy] = true;

        $this->products = Product::published()
            ->when($orderBy == 'newest', function ($query) {
                $query->orderByDesc('created_at');
            })
            ->when($orderBy == 'cheepest', function ($query) {
                $query->orderBy('price');
            })
            ->when($orderBy == 'most-expensive', function ($query) {
                $query->orderByDesc('price');
            })
            ->when($orderBy == 'most-sales', function ($query) {
                $query->withCount('sales')->orderByDesc('sales_count');
            })
            ->paginate(12);
    }

    #[Computed(persist: true)]
    public function categories()
    {
        return Category::whereHas('products', function ($query) {
            $query->published();
        })->select('id', 'name')->withCount('products')->get();
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
