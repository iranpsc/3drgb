<?php

namespace App\Livewire\Support;

use App\Models\Ticket;
use Livewire\Attributes\Title;
use Livewire\Component;

class UpdateTicket extends Component
{
    public Ticket $ticket;

    public $title;
    public $message;
    public $priority;
    public $attachment;

    protected $rules = [
        'title' => 'required|min:3',
        'message' => 'required|min:3',
        'priority' => 'required|in:low,medium,high',
        'attachment' => 'nullable|file|max:1024'
    ];

    public function mount()
    {
        $this->authorize('update', $this->ticket);

        $this->title = $this->ticket->title;
        $this->message = $this->ticket->message;
        $this->priority = $this->ticket->priority;
    }

    public function update()
    {
        $this->validate();

        $this->ticket->update([
            'title' => $this->title,
            'message' => $this->message,
            'priority' => $this->priority,
        ]);

        if ($this->attachment) {
            $this->ticket->update([
                'attachment' => $this->attachment->store('attachments')
            ]);
        }

        session()->flash('message', 'تیکت شما با موفقیت بروزرسانی شد.');
    }

    #[Title('پشتیبانی | بروزرسانی تیکت')]
    public function render()
    {
        return view('livewire.support.update-ticket');
    }
}
