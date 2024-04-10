<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Locked;

class Cart extends Component
{
    #[Locked]
    public $cart_items = [];

    #[Locked]
    public $products = [];

    public function mount()
    {
        $this->cart_items = session()->get('cart', []);
        $products_ids = array_column($this->cart_items, 'product_id');
        $this->products = Product::whereIn('id', $products_ids)->with('latestImage')->get();
    }

    public function removeFromCart(int $product_id)
    {
        $this->cart_items = array_filter($this->cart_items, function ($item) use ($product_id) {
            return $item['product_id'] !== $product_id;
        });

        session()->put('cart', $this->cart_items);

        $cartProductsCount = count(session()->get('cart', []));

        $this->dispatch('cartUpdated', compact('cartProductsCount'));

        $this->products = Product::whereIn('id', array_column($this->cart_items, 'product_id'))->with('latestImage')->get();

        session()->flash('message', 'محصول از سبد خرید حذف شد.');
    }

    public function updateCart(int $product_id, int $quantity)
    {
        $this->cart_items = array_map(function ($item) use ($product_id, $quantity) {
            if ($item['product_id'] === $product_id) {
                $item['quantity'] = $quantity;
            }

            return $item;
        }, $this->cart_items);

        session()->put('cart', $this->cart_items);

        $this->products = Product::whereIn('id', array_column($this->cart_items, 'product_id'))->with('latestImage')->get();
    }

    public function checkout()
    {
        if (count($this->cart_items) === 0) {
            return;
        }

        return $this->redirect('/checkout');
    }

    #[Title('سبد خرید')]
    public function render()
    {
        return view('livewire.cart');
    }
}
