<div>
    <form wire:submit="register">
        <x-forms.text-input name="name" label="نام کاربری" wire:model="name" />

        <x-forms.text-input type="email" name="email" label="ایمیل" wire:model="email" />

        <x-forms.text-input name="password" label="رمز عبور" type="password" wire:model="password" />

        <x-forms.text-input name="password_confirmation" label="تکرار رمز عبور" type="password" wire:model="password_confirmation" />

        <div class="admin-condition">
            <div class="checkbox-theme-default custom-checkbox ">
               <input class="checkbox" type="checkbox" id="terms-of-service" name="terms" wire:model="terms">
               <label for="terms-of-service">
                  <span class="checkbox-text">ایجاد یک حساب به این معنی است که شما با <a href="#" class="color-primary">شرایط خدمات</a> و <a href="#" class="color-primary">ضوابط</a> ما موافق هستید</span>
               </label>
               @error('terms')
                   <span class="form-text text-danger">{{ $message }}</span>
                @enderror
            </div>
         </div>

        <x-button type="submit" color="primary" size="block">ثبت نام</x-button>
    </form>

    <div class="d-grid my-2">
        <p>
            قبلا ثبت نام کرده اید؟
            <a href="{{ route('login') }}">
                وارد شوید
            </a>
        </p>
    </div>
</div>
