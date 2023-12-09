<?php

namespace App\Livewire\Support;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ticket;

class Tickets extends Component
{
    use WithPagination;

    private $ticktes;

    public function mount()
    {
        if (auth()->user()->hasRole('admin')) {
            $this->ticktes = Ticket::with(['responses.user', 'user'])->latest()->paginate(10);
        } else {
            $this->ticktes = auth()->user()->tickets()->latest()->paginate(10);
        }
    }

    #[Title('پشتیبانی')]
    public function render()
    {
        return view('livewire.support.tickets')
            ->with(['tickets' => $this->ticktes]);
    }
}
