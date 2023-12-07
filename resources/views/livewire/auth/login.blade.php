<div>
    @if (session()->has('error'))
        <x-alert type="danger" :message="session('error')" />
    @endif

    <form wire:submit="login">
        <x-forms.text-input name="email" label="ایمیل" type="email" wire:model="email" />

        <x-forms.text-input name="password" label="رمز عبور" type="password" wire:model="password" />

        <div class="admin-condition">
            <div class="checkbox-theme-default custom-checkbox ">
               <input class="checkbox" type="checkbox" id="remember_me" name="remember_me" wire:model="remember_me">
               <label for="remember_me">
                  <span class="checkbox-text">مرا بخاطر بسپار</span>
               </label>
               @error('remember_me')
                   <span class="form-text text-danger">{{ $message }}</span>
                @enderror
            </div>
         </div>

        <x-button type="submit" size="block" color="primary">ورود</x-button>
    </form>

    <div class="d-grid my-2">
        <a href="{{ route('password.request') }}" class="text-light">
            <i class="fa fa-key"></i>
            فراموشی رمز عبور
        </a>
    </div>

    <div class="d-grid mb-2">
        <p>
            ثبت نام نکرده اید؟
            <a href="{{ route('register') }}">ثبت نام کنید</a>
        </p>
    </div>
</div>
