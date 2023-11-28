@props(['name', 'label'])

<div class="form-group form-element-textarea">
    <label for="{{ $name }}" class="il-gray fs-14 fw-500 align-center mb-10">{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" {{ $attributes }}>{{ $slot }}</textarea>
    @error($name)
        <span class="form-text text-danger">{{ $message }}</span>
    @enderror
 </div>