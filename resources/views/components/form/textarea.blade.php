@props(['name', 'label'])

<div class="flex flex-col gap-5 " >
    <label for="{{ $name }}" >{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror  bg-[#F8F9FA] dark:bg-[#4A4E7C] w-full p-4 rounded-[10px] border-0 placeholder:text-[#00000030]" id="{{ $name }}" cols="30" rows="8" {{ $attributes }}>{{ $slot }}</textarea>
    @error($name)
        <span <span style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
    @enderror
 </div>