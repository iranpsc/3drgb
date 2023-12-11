<div>
    <x-page title="ایجاد پیام">
        @if (session()->has('message'))
            <x-alert type="success" message="{{ session('message') }}" />
        @endif
        <div class="row justify-content-center my-5">
            <div class="col-sm-10 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit="createTicket">
                            <x-forms.text-input wire:model="title" name="title" label="موضوع" placeholder="موضوع پیام را وارد کنید" />
                            <x-forms.select-input wire:model="priority" name="priority" label="اولویت">
                                <option value="low">کم</option>
                                <option value="medium">متوسط</option>
                                <option value="high">زیاد</option>
                            </x-forms.select-input>
                            <x-forms.file-input wire:model="attachment" name="attachment" label="فایل ضمیمه" />
                            <x-forms.textarea wire:model="message" name="message" label="متن پیام" placeholder="متن پیام را وارد کنید" />
                            <x-button type="submit">ارسال</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
