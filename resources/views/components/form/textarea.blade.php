@props(['name', 'label'])

<div class="flex flex-col gap-5 " >
    <label for="{{ $name }}" >{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror  w-full text-gray-400 py-3 rounded-[10px] border-2 border-gray-300 ring-offset-0 focus:ring-offset-0 ring-0 !focus:ring-0 bg-transparent" id="{{ $name }}" cols="30" rows="10" {{ $attributes }}>{{ $slot }}</textarea>
    @error($name)
        <span <span style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
    @enderror
 </div>