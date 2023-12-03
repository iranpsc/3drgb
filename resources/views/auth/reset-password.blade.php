<x-layouts.auth title="بازیابی رمز عبور">
    @if (session()->has('status'))
        <x-alert type="success" :message="session('status')" />
    @endif
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="mb-3">
            <input type="hidden" name="token" value="{{ $token }}">
            <x-forms.text-input name="email" label="ایمیل" type="email" :value="request()->query('email')" placeholder="آدرس ایمیل" />
            <x-forms.text-input name="password" label="رمز عبور" type="password" :value="old('password')" placeholder="رمز عبور" />
            <x-forms.text-input name="password_confirmation" label="تکرار رمز عبور" type="password" :value="old('password_confirmation')" placeholder="تکرار رمز عبور" />
        </div>

        <div class="d-grid">
            <x-button type="submit" color="info" size="block">
                {{ __('بازیابی رمز عبور') }}
            </x-button>
        </div>
    </form>
</x-layouts.auth>