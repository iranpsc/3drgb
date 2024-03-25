@props(['name', 'label', 'type' => 'text'])

<div class="flex flex-col gap-3 ">
    <label for="{{ $name }}" class="form-col-label col-sm-4">{{ $label }}</label>
    <div class="flex flex-col gap-5">
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror w-full  bg-[#F8F9FA] dark:bg-[#4A4E7C] rounded-[10px] p-4 border-0" name="{{ $name }}" id="{{ $name }}" {{ $attributes }}>
        @error($name)
            <span <span style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
        @enderror
    </div>
</div>
