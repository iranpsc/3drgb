<div>
    <x-page title="ایجاد پیام">

        @session('message')
            <x-alert type="success" message="{{ session('message') }}" />
        @endsession
        
        <div class="row justify-content-center my-5">
            <div class="col-sm-10 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit="createTicket">
                            <x-form.text wire:model="title" name="title" label="موضوع" placeholder="موضوع پیام را وارد کنید" />
                            <x-form.select wire:model="priority" name="priority" label="اولویت">
                                <option value="low">کم</option>
                                <option value="medium">متوسط</option>
                                <option value="high">زیاد</option>
                            </x-form.select>
                            <x-form.file wire:model="attachment" name="attachment" label="فایل ضمیمه" />
                            <x-form.textarea wire:model="message" name="message" label="متن پیام" placeholder="متن پیام را وارد کنید" />
                            <x-button type="submit">ارسال</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
