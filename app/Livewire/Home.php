<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule;

class Home extends Component
{
    #[Rule('required|string|min:3|max:255')]
    public $searchTerm;

    public function search()
    {
        $this->validate();

        $this->redirect('/products?search=' . $this->searchTerm);
    }

    #[Title('Home')]
    public function render()
    {
        return view('livewire.home')
            ->with([
                'categories' => Category::with(['parent', 'children'])->get(),
            ]);
    }
}
