<?php

namespace App\Livewire\Profile;

use App\Models\Order;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public function download(Product $product)
    {
        return response()->download(storage_path('app/' . $product->file->path));
    }

    #[Title('سفارشات')]
    public function render()
    {
        return view('livewire.profile.orders')
            ->with([
                'orders' => Order::whereBelongsTo(auth()->user())->with('products')
                    ->orderByDesc('created_at')->paginate(15)
            ]);
    }
}
