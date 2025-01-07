<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule;
use App\Models\Product;
use Livewire\Attributes\Computed;

class Home extends Component
{
    #[Rule('required|string|min:3|max:255')]
    public $searchTerm;

    public $products;

    public function search()
    {
        $this->validate();

        $this->redirect('/products?search=' . $this->searchTerm);
    }

    public function mount()
    {
        $this->products = Product::published()
            ->createdByAdmin()
            ->withAvg('reviews as rating_avg', 'rating')
            ->with('latestImage')
            ->orderByDesc('created_at')
            ->take(15)
            ->get();
    }

    /**
     * Change the tab of the products list.
     *
     * @param string $tab
     * @return void
     */
    public function changeTab($tab)
    {
        $this->products = match ($tab) {
            'order-by-newest' => Product::published()
                ->createdByAdmin()
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('latestImage')
                ->orderByDesc('created_at')
                ->take(15)
                ->get(),
            'order-by-score' => Product::published()
                ->createdByAdmin()
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('latestImage')
                ->orderBy('rating_avg', 'desc')
                ->take(15)
                ->get(),
            'order-by-sales' => Product::published()
                ->createdByAdmin()
                ->withAvg('reviews as rating_avg', 'rating')
                ->withCount('sales')
                ->with('latestImage')
                ->orderByDesc('sales_count')
                ->take(15)
                ->get(),
        };

    }

    #[Computed(persist: true)]
    public function popularCategories()
    {
        return Category::with('parent', 'image')->whereHas('products', function ($query) {
            $query->published();
        })->withCount('products')->orderByDesc('products_count')->take(12)->get();
    }

    #[Title('سه بعدی متا')]
    public function render()
    {
        return view('livewire.home');
    }
}
