<?php

namespace App\Livewire\StoreManagement\SubmitedOrders;

use App\Models\SubmitOrder;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;

    #[Title('سفارشات ثبت شده')]
    public function render()
    {
        return view('livewire.store-management.submited-orders.listing')
        ->with([
            'orders' => SubmitOrder::latest()->paginate(10)
        ]);
    }
}
