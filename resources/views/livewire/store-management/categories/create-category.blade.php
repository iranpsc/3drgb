<div>
    <x-page title="ایجاد دسته بندی">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6">
                @if (session()->has('message'))
                    <x-alert type="success" message="{{ session('message') }}" />
                @endif
        
                <form wire:submit="save">
        
                    <x-forms.select-input wire:model="parent_id" name="parent_id" label="دسته بندی والد">
                        <option value="">دسته بندی تعریف نشده است</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-forms.select-input>
        
                    <x-forms.text-input  wire:model="name" name="name" label="نام دسته بندی" />
                    <x-forms.text-input  wire:model="slug" name="slug" label="نامک دسته بندی" />
                    <x-forms.file-input wire:model="image" name="image" label="تصویر دسته بندی" />
                    <x-forms.textarea  wire:model="description" name="description" label="توضیحات دسته بندی" />
        
                    <x-button type="submit">ذخیره</x-button>
                </form>
            </div>
        </div>

    </x-page>
</div>
