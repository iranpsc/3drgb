<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use App\Models\ContactUsMessage;
use Livewire\Component;

class ContactUsMessages extends Component
{
    #[Title('پیام‌های تماس با ما')]
    public function render()
    {
        return view('livewire.contact-us-messages', [
            'messages' => ContactUsMessage::latest()->paginate(10),
        ]);
    }
}
