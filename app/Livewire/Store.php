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

    #[Url(as: 'tags_filter')]
    public $tagsFilter = [];

    #[Url(as: 'category')]
    public $category;

    public $price_filter = [
        'min' => 0,
        'max' => 9000000,
    ];

    private $products;

    public $orderBy = [
        'newest' => true,
        'cheapest' => false,
        'most-expensive' => false,
        'most-sales' => false,
    ];

    /**
     * Mount the component.
     *
     * This method is called when the component is being mounted.
     * It loads the products and tags.
     *
     * @return void
     */
    public function mount()
    {
        $this->loadProducts();
    }

    /**
     * Load the products.
     *
     * This method loads the products based on the search, tags filter, category, and orderBy parameters.
     *
     * @return void
     */
    public function loadProducts()
    {
        $query = Product::published()
            ->withCount('reviews')
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('oldestImage');

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->tagsFilter) {
            $query->whereHas('tags', function ($query) {
                $query->whereIn('slug', $this->tagsFilter);
            });
        }

        if ($this->category) {
            $query->whereHas('category', function ($query) {
                $query->where('slug', $this->category);
            });
        }

        foreach ($this->orderBy as $key => $value) {
            if ($value) {
                switch ($key) {
                    case 'cheapest':
                        $query->orderBy('price');
                        break;
                    case 'most-expensive':
                        $query->orderByDesc('price');
                        break;
                    case 'most-sales':
                        $query->withCount('sales')->orderBy('sales_count');
                        break;
                }
            }
        }

        $this->products = $query->orderByDesc('created_at')->paginate(15);
    }

    /**
     * Update the search parameter.
     *
     * This method is called when the search parameter is updated.
     * It resets the page and other filters, and reloads the products.
     *
     * @return void
     */
    public function updatedSearch()
    {
        $this->resetPage();
        $this->reset('tagsFilter', 'category');
        $this->loadProducts();
    }

    /**
     * Update the price filter.
     *
     * This method is called when the price filter is updated.
     * It resets the page and reloads the products.
     *
     * @return void
     */
    public function updatedPriceFilter()
    {
        $this->resetPage();
        $this->loadProducts();
    }

    /**
     * Get products by category.
     *
     * This method is called to get products by a specific category.
     * It resets the page, search, and tag filters, sets the category, and reloads the products.
     *
     * @param int $id The ID of the category.
     * @return void
     */
    public function getPorductsByCategory($id)
    {
        $this->resetPage();
        $this->reset('search', 'tagsFilter');
        $this->category = Category::findOrFail($id)->slug;
        $this->loadProducts();
    }

    /**
     * Update the tags filter.
     *
     * This method is called when the tags filter is updated.
     * It resets the page, search, and category filters, and reloads the products.
     *
     * @return void
     */
    public function updatedTagsFilter()
    {
        $this->resetPage();
        $this->reset('search', 'category');
        $this->loadProducts();
    }

    /**
     * Sort the products by the given order.
     *
     * This method is called to sort the products by the given order.
     * It resets the page, sets the orderBy parameter, and reloads the products.
     *
     * @param string $orderBy The order by which to sort the products.
     * @return void
     */
    public function sortBy(string $orderBy)
    {
        $this->resetPage();

        foreach ($this->orderBy as $key => $value) {
            $this->orderBy[$key] = $key === $orderBy;
        }

        $this->loadProducts();
    }

    /**
     * Get the categories.
     *
     * This method returns the categories with their products count and image.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    #[Computed(persist: true)]
    public function categories()
    {
        return Category::whereHas('products', function ($query) {
            $query->published();
        })->select('id', 'name')->with('image')->withCount('products')
            ->orderByDesc('products_count')->get();
    }

    /**
     * Updating the page parameter.
     *
     * This method is called when the page parameter is being updated.
     * It can be used to perform additional actions when the page is being updated.
     *
     * @param int $page The updated page number.
     * @return void
     */
    public function updatingPage($page)
    {
        // $this->resetPage();
    }

    /**
     * Updated the page parameter.
     *
     * This method is called when the page parameter is updated.
     * It reloads the products.
     *
     * @param int $page The updated page number.
     * @return void
     */
    public function updatedPage($page)
    {
        $this->loadProducts();
    }

    #[Title('محصولات')]
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->products ?? Product::published()
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('oldestImage', 'category.parent')
                ->latest()
                ->paginate(15),
            'tags' => Tag::paginate(10)
        ]);
    }
}
