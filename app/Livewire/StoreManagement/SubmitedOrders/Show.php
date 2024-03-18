<?php

namespace App\Livewire\StoreManagement\SubmitedOrders;

use App\Models\SubmitOrder;
use Livewire\Attributes\Title;
use Livewire\Component;

class Show extends Component
{
    public SubmitOrder $order;

    #[Title('جزئیات سفارش')]
    public function render()
    {
        return view('livewire.store-management.submited-orders.show');
    }
}
