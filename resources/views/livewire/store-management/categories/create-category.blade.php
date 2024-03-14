<div>
    <x-page title="ایجاد دسته بندی">
        <div class="row justify-content-center">
            <div class="flex flex-col gap-5">

                @session('message')
                    <x-alert type="success" message="{{ session('message') }}" />
                @endsession

                <form wire:submit="save" class="grid lg:grid-cols-2 gap-5">

                    <x-form.select wire:model="parent_id" name="parent_id" label="دسته بندی والد">
                        <option value="">دسته بندی تعریف نشده است</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-form.select>

                    <x-form.text  wire:model="name" name="name" label="نام" />
                    <x-form.text  wire:model="slug" name="slug" label="نامک" />
                    <x-form.file wire:model="image" name="image" label="تصویر" />
                    <x-form.textarea  wire:model="description" name="description" label="توضیحات" />

                    <x-button type="submit">ذخیره</x-button>
                </form>
            </div>
        </div>

    </x-page>
</div>
