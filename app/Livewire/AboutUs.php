<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class AboutUs extends Component
{
    #[Title('درباره ما')]
    public function render()
    {
        return view('livewire.about-us');
    }
}
