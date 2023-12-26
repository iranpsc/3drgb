<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Store extends Component
{
    use WithPagination;

    #[Url(as: 'search')]
    public $q = '';

    public $search;

    private $products;

    public $orderBy = [
        'newest' => true,
        'cheapest' => false,
        'most-expensive' => false,
        'most-sales' => false,
    ];

    public function mount()
    {
        if ($this->q) {
            $this->products = Product::published()
                ->where('name', 'like', '%' . $this->q . '%')
                ->orderByDesc('created_at')
                ->paginate(16);
        } else {
            $this->products = Product::published()->orderByDesc('created_at')
                ->with('images')
                ->paginate(16);
        }
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
            ->paginate(16);
    }

    public function getPorductsByCategory($id)
    {
        $this->resetPage();

        $this->products = Product::published()
            ->where('category_id', $id)
            ->paginate(16);
    }

    public function sortBy(string $orderBy)
    {
        $this->resetPage();

        $this->orderBy = [
            'newest' => false,
            'cheapest' => false,
            'most-expensive' => false,
            'most-sales' => false,
        ];

        $this->orderBy[$orderBy] = true;

        $this->products = Product::published()
            ->when($orderBy == 'newest', function ($query) {
                $query->orderByDesc('created_at');
            })
            ->when($orderBy == 'cheapest', function ($query) {
                $query->orderBy('price');
            })
            ->when($orderBy == 'most-expensive', function ($query) {
                $query->orderByDesc('price');
            })
            ->when($orderBy == 'most-sales', function ($query) {
                $query->withCount('sales')->orderByDesc('sales_count');
            })
            ->paginate(16);
    }

    #[Computed(persist: true)]
    public function categories()
    {
        return Category::whereHas('products', function ($query) {
            $query->published();
        })->select('id', 'name')->withCount('products')->get();
    }

    public function updatingPage($page)
    {
        // $this->resetPage();
    }

    public function updatedPage($page)
    {
        $this->products = Product::published()->paginate(16, ['*'], 'page', $page);
    }

    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->products,
        ]);
    }
}
