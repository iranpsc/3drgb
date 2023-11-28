<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Login extends Component
{
    public $email, $password, $remember_me;

    public function login(Request $request)
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember_me' => 'nullable|boolean'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $request->session()->regenerate();

            return redirect()->intended(route('store'));
        }
        session()->flash('error', __('auth.failed'));
    }

    #[Layout('components.layouts.auth', ['title' => 'ورود'])]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
