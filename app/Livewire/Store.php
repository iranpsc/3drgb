<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use App\Models\Tag;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Store extends Component
{
    use WithPagination;

    #[Url(as: 'search')]
    public $q = '';

    #[Url(as: 'category')]
    public $category;

    public $price_filter = [
        'min' => 7000,
        'max' => 95000,
    ];

    public $tag_filter = [];

    public $search, $tags;

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
                ->withCount('reviews')
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('latestImage')
                ->orderByDesc('created_at')
                ->paginate(15);
        }

        if ($this->category) {
            //
        }

        $this->tags = Tag::take(10)->get();
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
            ->where('name', 'like', '%' . $this->q . '%')
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    /**
     * Filter products by price.
     *
     * @return void
     */
    public function updatedPriceFilter()
    {
        $this->resetPage();

        $this->products = Product::published()
            ->whereBetween('price', [$this->price_filter['min'], $this->price_filter['max']])
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    public function getPorductsByCategory($id)
    {
        $this->resetPage();

        $this->products = Product::published()
            ->where('category_id', $id)
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    public function updatedTagFilter()
    {
        $this->resetPage();

        $this->products = Product::published()
            ->when(!empty($this->tag_filter), function ($query) {
                $query->whereHas('tags', function ($query) {
                    $query->whereIn('tags.id', $this->tag_filter);
                });
            })
            ->where('name', 'like', '%' . $this->q . '%')
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
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
            ->where('name', 'like', '%' . $this->q . '%')
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    #[Computed(persist: true)]
    public function categories()
    {
        return Category::whereHas('products', function ($query) {
            $query->published();
        })->select('id', 'name')->with('image')->withCount('products')
            ->orderByDesc('products_count')->get();
    }

    public function updatingPage($page)
    {
        // $this->resetPage();
    }

    public function updatedPage($page)
    {
        $this->products = Product::published()
            ->where('name', 'like', '%' . $this->q . '%')
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->products ?? Product::published()
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('latestImage', 'category.parent')
                ->orderByDesc('created_at')
                ->paginate(15)
        ]);
    }
}
