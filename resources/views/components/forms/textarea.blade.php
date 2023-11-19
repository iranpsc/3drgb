@props(['for', 'label'])

<div class="form-group form-element-textarea">
    <label for="{{ $for }}" class="il-gray fs-14 fw-500 align-center mb-10">{{ $label }}</label>
    <textarea class="form-control" id="{{ $for }}" {{ $attributes->merge(['rows' => 3 'cols' => 10]) }}>{{ $slot }}</textarea>
 </div>