<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation, $terms;

    public function register(Request $request)
    {
        $this->validate([
            'name' => 'required|string|min:3|max:125',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
            'terms' => 'required|boolean|accepted'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        auth()->login($user);

        $request->session()->regenerate();

        event(new Registered($user));

        return $this->redirect('/');
    }

    #[Layout('components.layouts.auth', ['title' => 'ثبت نام'])]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
