<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class ChangePassword extends Component
{
    /**
     * The current password.
     *
     * @var string
     */
    public $current_password;

    /**
     * The new password.
     *
     * @var string
     */
    public $password;

    /**
     * The new password confirmation.
     *
     * @var string
     */
    public $password_confirmation;

    /**
     * Update the user's password.
     *
     * @return void
     */
    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required|current_password',
            'password' => ['required', Password::min(8)->mixedCase()],
        ]);

        auth()->user()->update([
            'password' => Hash::make($this->password),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        session()->flash('message', 'رمز عبور شما با موفقیت تغییر کرد.');
    }

    public function render()
    {
        return view('livewire.user.change-password');
    }
}
