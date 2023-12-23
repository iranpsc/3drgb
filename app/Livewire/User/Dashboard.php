<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title('داشبورد')]
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
