<x-layouts.auth title="ارسال لینک بازیابی رمز عبور">
    
    @session('status')
        <x-alert type="success" :message="session('status')" />
    @endsession

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <x-form.text name="email" label="ایمیل" type="email" :value="old('email')" placeholder="آدرس ایمیل" />
        </div>

        <div class="d-grid">
            <x-button type="submit" color="info" size="block">
                {{ __('ارسال لینک بازیابی رمز عبور') }}
            </x-button>
        </div>
    </form>
</x-layouts.auth>