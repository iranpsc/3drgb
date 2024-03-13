@props(['name', 'label'])
<div class="flex flex-col gap-3">
    <label for="{{ $name }}" >{{$label}}</label>
    <div class="flex flex-col gap-5">
        <select  class="form-control  @error($name) is-invalid @enderror w-full  bg-[#F8F9FA] dark:bg-[#4A4E7C] rounded-[10px] p-4  px-10" name="{{ $name }}" {{ $attributes }} id="{{ $name }}">
            {{ $slot }}
        </select>
        @error($name)
            <span style="color:red;padding:14px;background-color:rgba(207, 117, 117, 0.47);border-radius:10px">{{ $message }}</span>
        @enderror
    </div>
 </div>