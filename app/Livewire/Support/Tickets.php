<?php

namespace App\Livewire\Support;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ticket;

class Tickets extends Component
{
    use WithPagination;

    public function delete(Ticket $ticket)
    {
        $this->authorize('delete', $ticket);

        $ticket->delete();
    }

    #[Title('پشتیبانی')]
    public function render()
    {
        return view('livewire.support.tickets')
            ->with('tickets', Ticket::when(
                !auth()->user()->hasRole('admin'), fn ($query) => $query->where('user_id', auth()->id())
                )->with('user')->latest()->paginate(10));
    }
}
