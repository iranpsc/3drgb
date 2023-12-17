<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class ChangePassword extends Component
{
    #[Rule('required|current_password')]
    public $current_password;

    #[Rule('required|confirmed|min:6')]
    public $password;

    public $password_confirmation;

    /**
     * Update the user's password.
     *
     * @return void
     */
    public function updatePassword()
    {
        $this->validate();

        auth()->user()->update([
            'password' => Hash::make($this->password),
        ]);

        $this->reset();

        session()->flash('message', 'رمز عبور شما با موفقیت تغییر کرد.');
    }

    #[Title('تغییر رمز عبور')]
    public function render()
    {
        return view('livewire.user.change-password');
    }
}
