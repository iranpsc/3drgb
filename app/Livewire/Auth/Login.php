<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;

class Login extends Component
{
    #[Url]
    public $redirect;

    public $email, $password, $remember_me;

    public function login(Request $request)
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember_me' => 'nullable|boolean'
        ]);

        $credentials = $this->only('email', 'password');

        if (Auth::attempt($credentials, $this->remember_me)) {
            $request->session()->regenerate();

            if ($this->redirect) {
                return $this->redirectRoute($this->redirect);
            }

            return redirect()->intended('/');
        }

        session()->flash('error', __('auth.failed'));
    }

    #[Layout('components.layouts.auth', ['title' => 'ورود'])]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
