<?php

namespace App\Livewire;

use App\Models\ContactUsMessage;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class ContactUs extends Component
{
    #[Rule('required|string|max:255')]
    public $name;

    #[Rule('required|email')]
    public $email;

    #[Rule('required|ir_mobile')]
    public $phone;

    #[Rule('required|string|max:255')]
    public $subject;

    #[Rule('required|string|max:5000')]
    public $message;

    public function submit()
    {
        $this->validate();

        ContactUsMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash('message', 'پیام شما با موفقیت ارسال شد.');

        $this->reset();
    }

    #[Title('تماس با ما')]
    public function render()
    {
        return view('livewire.contact-us');
    }
}
