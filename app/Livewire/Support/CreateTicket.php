<?php

namespace App\Livewire\Support;

use App\Models\Ticket;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTicket extends Component
{
    use WithFileUploads;

    public $title;
    public $message;
    public $attachment;
    public $priority = 'medium';

    protected $rules = [
        'title' => 'required|string|min:3|max:255',
        'message' => 'required|string|min:3|max:5000',
        'attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:1024',
        'priority' => 'required|in:low,medium,high'
    ];

    public function createTicket()
    {
        $this->validate();

        Ticket::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'message' => $this->message,
            'priority' => $this->priority,
            'attachment' => $this->attachment ? $this->attachment->store('attachments') : null
        ]);

        $this->reset();

        session()->flash('message', 'پیام شما با موفقیت ارسال شد.');
    }

    #[Title('ایجاد پیام')]
    public function render()
    {
        return view('livewire.support.create-ticket');
    }
}
