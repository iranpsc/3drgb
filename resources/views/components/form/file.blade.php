@props(['name', 'label'])

<div class="flex flex-col gap-2">
    <label for="{{ $name }}" class="col-sm-4 col-form-label">{{ $label }}</label>
    <div class="flex flex-col gap-5">
        <input class="form-control custom-file-input w-full bg-[#F8F9FA] dark:bg-[#4A4E7C] rounded-[10px] p-3 border-dashed border-gray-500 dark:border-gray-400 border-2" type="file" id="{{ $name }}" {{ $attributes }}>
        @error($name)
            <span style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
        @enderror
    </div>
</div>