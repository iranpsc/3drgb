<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SubmitOrder as SubmitOrderModel;
use Illuminate\Validation\Rule;

class SubmitOrder extends Component
{
    use WithFileUploads;

    public $name, $email, $phone, $subject, $message, $attachment;

    protected function rules()
    {
        return [
            'name' => [
                'nullable',
                Rule::requiredIf(!auth()->check()),
                'string',
                'max:255',
            ],
            'email' => [
                'nullable',
                Rule::requiredIf(!auth()->check()),
                'string',
                'email',
                'max:255',
            ],
            'phone' => [
                'nullable',
                Rule::requiredIf(!auth()->check()),
                'string',
                'max:255',
            ],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'attachment' => ['nullable', 'file', 'max:1024'],
        ];
    }

    public function submit()
    {
        $this->validate();

        SubmitOrderModel::create([
            'name' => auth()->check() ? auth()->user()->name : $this->name,
            'email' => auth()->check() ? auth()->user()->email : $this->email,
            'phone' => auth()->check() ? auth()->user()->phone : $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'attachment' => $this->attachment ? $this->attachment->store('attachments', 'public') : null,
        ]);

        $this->reset();

        session()->flash('message', 'سفارش شما با موفقیت ثبت شد.');
    }

    #[Title('ثبت سفارش')]
    public function render()
    {
        return view('livewire.submit-order');
    }
}
