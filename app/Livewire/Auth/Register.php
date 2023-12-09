<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation, $terms;

    public function register(Request $request)
    {
        $this->validate([
            'name' => 'required|string|min:3|max:125',
            'email' => 'required|email:filter|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(6)->numbers()->letters()],
            'terms' => 'required|boolean|accepted'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        $request->session()->regenerate();

        return $this->redirect('/dashboard');
    }

    #[Layout('components.layouts.auth', ['title' => 'ثبت نام'])]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
