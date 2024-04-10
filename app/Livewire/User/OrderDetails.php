<?php

namespace App\Livewire\User;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class OrderDetails extends Component
{
    public Order $order;

    public function mount(Order $order)
    {
        $this->authorize('view', $order);
        $this->order = $order->load('products.users');
    }

    public function download(Product $product)
    {
        $this->authorize('download', $product);

        $product->users()->updateExistingPivot(Auth::id(), [
            'download_count' => $product->users()->find(auth()->id())->pivot->download_count + 1,
            'downloaded_at' => now(),
        ]);

        return response()->download(storage_path('app/' . $product->file->path));
    }

    #[Title('جزئیات سفارش')]
    public function render()
    {
        return view('livewire.user.order-details');
    }
}
