<div>
    <x-page title="ویرایش دسته بندی">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6">
                @if (session()->has('message'))
                    <x-alert type="success" message="{{ session('message') }}" />
                @endif
        
                <form wire:submit="save">
        
                    <x-form.select wire:model="parent_id" name="parent_id" label="دسته بندی والد">
                        <option value="">دسته بندی تعریف نشده است</option>
                        @foreach ($categories as $item)
                            @continue($item->id == $category->id)
                            <option value="{{ $item->id }}" @selected($category->parent_id == $item->id)>{{ $item->name }}</option>
                        @endforeach
                    </x-form.select>
        
                    <x-form.text  wire:model="name" name="name" label="نام" />
                    <x-form.text  wire:model="slug" name="slug" label="نامک" />
                    <x-form.file wire:model="image" name="image" label="تصویر" />
                    <x-form.textarea  wire:model="description" name="description" label="توضیحات" />
        
                    <x-button type="submit">بروزرسانی</x-button>
                </form>
            </div>
        </div>

    </x-page>
</div>
