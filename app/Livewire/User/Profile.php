<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;

    /**
     * The user's avatar.
     *
     * @var object
     */
    public $avatar;

    /**
     * The user's name.
     *
     * @var string
     */
    public $name;

    /**
     * The user's email.
     *
     * @var string
     */
    public $email;

    /**
     * The user's phone.
     *
     * @var string
     */
    public $phone;

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->user = User::find(auth()->id());

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->avatar = $this->user->avatar;
    }

    /**
     * Update the user's profile information.
     *
     * @return void
     */
    public function updateProfileInformation()
    {
        $this->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->user->id],
            'phone' => ['required', 'ir_mobile', 'unique:users,phone,' . $this->user->id],
            'avatar' => 'nullable|image|max:2024',
        ]);

        if ($this->avatar) {
            $avatar = $this->avatar->store('avatars', 'public');
        }

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->phone = $this->phone;
        $this->user->avatar = $avatar ?? $this->user->avatar;

        $this->user->save();
        
        if($this->user->wasChanged('email')) {
            $this->user->email_verified_at = null;
            $this->user->sendEmailVerificationNotification();
            $this->user->save();

            session()->flash('info', 'ایمیل تایید حساب کاربری برای شما ارسال شد.');
        }

        
        session()->flash('message', 'اطلاعات کاربری شما با موفقیت بروزرسانی شدند.');
    }
    
    #[Title('ویرایش اطلاعات کاربری')]
    public function render()
    {
        return view('livewire.user.profile');
    }
}
