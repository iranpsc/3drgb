<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Store extends Component
{
    #[Title('فروشگاه')]
    public function render()
    {
        return view('livewire.store');
    }
}
