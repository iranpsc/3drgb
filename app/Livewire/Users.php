<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $search = '';

    private $users = null;

    public function updatedSearch()
    {
        $this->resetPage();

        $this->users = User::where('name', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%")
            ->orWhere('phone', 'like', "%{$this->search}%")
            ->withCount('products')
            ->paginate(10);
    }

    #[Title('کاربران')]
    public function render()
    {
        return view('livewire.users')->with([
            'users' => $this->users ?? User::withCount('products')->paginate(10)
        ]);
    }
}
