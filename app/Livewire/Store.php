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
    public $search = '';

    #[Url(as: 'tag')]
    public $tag;

    #[Url(as: 'category')]
    public $category;

    public $price_filter = [
        'min' => 0,
        'max' => 9000000,
    ];

    public $tags;

    private $products;

    public $orderBy = [
        'newest' => true,
        'cheapest' => false,
        'most-expensive' => false,
        'most-sales' => false,
    ];

    public function mount()
    {
        if ($this->search) {
            $this->products = Product::published()
                ->where('name', 'like', '%' . $this->search . '%')
                ->withCount('reviews')
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('oldestImage')
                ->orderByDesc('created_at')
                ->paginate(15);
        }

        if ($this->tag) {
            $this->products = Product::published()
                ->whereHas('tags', function ($query) {
                    $query->where('slug', $this->tag);
                })
                ->withCount('reviews')
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('oldestImage')
                ->orderByDesc('created_at')
                ->paginate(15);
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

        $this->reset('tag', 'category');

        $this->products = Product::published()
            ->where('name', 'like', '%' . $this->search . '%')
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('oldestImage')
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
            ->with('oldestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    public function getPorductsByCategory($id)
    {
        $this->resetPage();

        $this->reset('search', 'tag');

        $this->category = Category::findOrFail($id)->slug;

        $this->products = Product::published()
            ->where('category_id', $id)
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('oldestImage')
            ->orderByDesc('created_at')
            ->paginate(15);
    }

    public function updatedTag()
    {
        $this->resetPage();

        $this->reset('search', 'category');

        $this->products = Product::published()
            ->when($this->tag, function ($query) {
                $query->whereHas('tags', function ($query) {
                    $query->where('tags.slug', $this->tag);
                });
            })
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('oldestImage')
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
                $query->latest();
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
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('oldestImage')
            ->latest()
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
            ->when($this->category, function ($query) {
                $query->whereHas('category', function ($query) {
                    $query->where('slug', $this->category);
                });
            })
            ->when($this->tag, function ($query) {
                $query->whereHas('tags', function ($query) {
                    $query->where('slug', $this->tag);
                });
            })
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('oldestImage')
            ->latest()
            ->paginate(15);
    }

    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->products ?? Product::published()
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('oldestImage', 'category.parent')
                ->latest()
                ->paginate(15)
        ]);
    }
}
