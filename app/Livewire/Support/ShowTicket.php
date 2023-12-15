<?php

namespace App\Livewire\Support;

use App\Models\Ticket;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Notifications\TicketResponse;
use Livewire\WithFileUploads;

class ShowTicket extends Component
{
    use WithFileUploads;
    
    public Ticket $ticket;

    #[Rule('required|string|max:500')]
    public $message;

    #[Rule('nullable|file|max:1024')]
    public $attachment;

    public function mount()
    {
        $this->authorize('view', $this->ticket);

        $this->ticket->load(['responses.user', 'user']);
    }

    public function sendResponse()
    {
        $this->validate();

        $this->authorize('respond', $this->ticket);

        $this->ticket->responses()->create([
            'message' => $this->message,
            'attachment' => $this->attachment ? $this->attachment->store('attachments') : null,
            'user_id' => auth()->id()
        ]);

        $this->ticket->update(['response_status' => 'replied']);

        $this->ticket->user->notify(new TicketResponse($this->ticket));

        $this->ticket = $this->ticket->fresh();

        $this->reset(['message', 'attachment']);
    }

    public function downloadAttachment()
    {
        return response()->download(storage_path('app/' . $this->ticket->attachment));
    }

    #[Title('پشتیبانی | جزئیات پیام')]
    public function render()
    {
        return view('livewire.support.show-ticket');
    }
}
