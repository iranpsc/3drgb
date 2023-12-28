<div>
    <x-page title="پروفایل من">

        @session('message')
            <x-alert type="success" :message="session('message')" />
        @endsession

        @session('info')
            <x-alert type="success" :message="session('info')" />
        @endsession


        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit="updateProfileInformation">
                            <x-form.text wire:model="name" name="name" label="نام" placeholder="نام" />
                            <x-form.text wire:model="email" name="email" type="email" label="ایمیل" placeholder="ایمیل" />
                            <x-form.text wire:model="phone" name="phone" label="تلفن همراه" placeholder="تلفن همراه" />
                            <x-form.file wire:model="avatar" name="avatar" label="تصویر پروفایل" placeholder="تصویر پروفایل" />
                            <x-button type="submit">ذخیره</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
