<?php

namespace App\Livewire\User;

use App\Models\Order;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

class OrderDetails extends Component
{
    public Order $order;

    public function mount(Order $order)
    {
        $this->authorize('view', $order);
        $this->order = $order->load('products', 'products.file');
    }

    public function download(Product $product) 
    {
        $this->authorize('download', $product);

        return response()->download(storage_path('app/' . $product->file->path));
    }

    #[Title('جزئیات سفارش')]
    public function render()
    {
        return view('livewire.user.order-details');
    }
}
