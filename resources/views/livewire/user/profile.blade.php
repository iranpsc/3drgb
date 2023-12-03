<div>
    <x-page title="پروفایل من">
        @if(session()->has('message'))
            <x-alert type="success" message="{{ session('message') }}" />
        @endif

        @if(session()->has('info'))
            <x-alert type="info" message="{{ session('info') }}" />
        @endif


        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit="updateProfileInformation">
                            <x-forms.text-input wire:model="name" name="name" label="نام" placeholder="نام" />
                            <x-forms.text-input wire:model="email" name="email" type="email" label="ایمیل" placeholder="ایمیل" />
                            <x-forms.text-input wire:model="phone" name="phone" label="تلفن همراه" placeholder="تلفن همراه" />
                            <x-forms.file-input wire:model="avatar" name="avatar" label="تصویر پروفایل" placeholder="تصویر پروفایل" />
                            <x-button type="submit">ذخیره</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
