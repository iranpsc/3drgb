<div>
    @if (session()->has('error'))
        <x-alert type="danger" :message="session('error')" />
    @endif

    <form wire:submit="login">
        <x-forms.text-input name="email" label="ایمیل" type="email" wire:model="email" />

        <x-forms.text-input name="password" label="رمز عبور" type="password" wire:model="password" />

        <x-button type="submit" size="block" color="primary">ورود</x-button>
    </form>
</div>
