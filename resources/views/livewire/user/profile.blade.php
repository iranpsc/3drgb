<main class="w-full main-content-smallNav ">
<div>
    <x-page title="پروفایل من">

        @session('message')
            <x-alert type="success" :message="session('message')" />
        @endsession

        @session('info')
            <x-alert type="success" :message="session('info')" />
        @endsession


        <div >
            <div >
                <div class="mt-5">
                    <div class="">
                        <form wire:submit="updateProfileInformation" class="grid lg:grid-cols-2 gap-7 ">
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
</main>    
