<div>
    <x-page title="تغییر رمز عبور">

        @if(session()->has('message'))
            <x-alert type="success" message="{{ session('message') }}" />
        @endif

        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="updatePassword">
                            <x-forms.text-input wire:model="current_password" name="current_password" type="password" label="رمز عبور فعلی" placeholder="رمز عبور فعلی" />
                            <x-forms.text-input wire:model="password" name="password" type="password" label="رمز عبور جدید" placeholder="رمز عبور جدید" />
                            <x-forms.text-input wire:model="password_confirmation" name="password_confirmation" type="password" label="تکرار رمز عبور جدید" placeholder="تکرار رمز عبور جدید" />
                            <x-button type="submit">ذخیره</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
