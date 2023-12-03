<x-layouts.auth title="ارسال لینک بازیابی رمز عبور">
    @if (session()->has('status'))
        <x-alert type="success" :message="session('status')" />
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <x-forms.text-input name="email" label="ایمیل" type="email" :value="old('email')" placeholder="آدرس ایمیل" />
        </div>

        <div class="d-grid">
            <x-button type="submit" color="info" size="block">
                {{ __('ارسال لینک بازیابی رمز عبور') }}
            </x-button>
        </div>
    </form>
</x-layouts.auth>