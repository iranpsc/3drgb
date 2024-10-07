<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Avatar extends Component
{
    #[Title('آواتار')]
    public function render()
    {
        return view('livewire.avatar');
    }
}

