<?php

namespace App\Livewire\Checkout;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CreateAccount extends Component
{
    #[Rule('required|string|max:255')]
    public $name;

    #[Rule('required|email|max:255|unique:users,email')]
    public $email;

    #[Rule('required|string|min:6|confirmed')]
    public $password;

    public $password_confirmation;

    public $hasAccount = false;

    public function register()
    {
        $this->redirectRoute('register');
    }

    public function login()
    {
        $this->redirectRoute('login');
    }

    // public function createAccount()
    // {
    //     $this->validate();

    //     $user = User::create([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'password' => Hash::make($this->password),
    //     ]);

    //     Auth::login($user);

    //     $this->dispatch('move-to-payment')->to(Checkout::class);
    // }

    // public function login()
    // {
    //     $this->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $this->only(['email', 'password']);

    //     if (!Auth::attempt($credentials)) {
    //         $this->addError('email', 'اطلاعات وارد شده صحیح نمی باشد.');
    //         return;
    //     }

    //     $this->dispatch('move-to-payment')->to(Checkout::class);
    // }

    // public function toggleHasAccount()
    // {
    //     $this->hasAccount = !$this->hasAccount;
    // }

    public function render()
    {
        return view('livewire.checkout.create-account');
    }
}
