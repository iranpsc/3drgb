<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

class AdminDashboard extends Component
{
    #[Title('داشبورد مدیریت')]
    public function render()
    {
        return view('livewire.admin-dashboard')->with([
            'products_count' => Product::count(),
        ]);
    }
}
