<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule;
use App\Models\Product;

class Home extends Component
{
    #[Rule('required|string|min:3|max:255')]
    public $searchTerm;

    private $products = null;

    public function search()
    {
        $this->validate();

        $this->redirect('/products?search=' . $this->searchTerm);
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
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('images')
                ->orderByDesc('created_at')
                ->paginate(12),
            'order-by-score' => Product::published()
                ->withAvg('reviews as rating_avg', 'rating')
                ->with('images')
                ->orderBy('rating_avg', 'desc')
                ->paginate(12),
            'order-by-sales' => Product::published()
                ->withAvg('reviews as rating_avg', 'rating')
                ->withCount('sales')
                ->with('images')
                ->orderByDesc('sales_count')
                ->paginate(12),
        };
    }

    #[Title('سه بعدی متا')]
    public function render()
    {
        return view('livewire.home')
            ->with([
                'popular_categories' => Category::with('parent')->whereHas('products', function ($query) {
                    $query->published();
                })->withCount('products')->orderByDesc('products_count')->take(12)->get(),
                'products' => $this->products ?? Product::published()
                    ->withAvg('reviews as rating_avg', 'rating')
                    ->with('images')
                    ->orderByDesc('rating_avg')
                    ->paginate(12)
            ]);
    }
}
