@props([
    'for',
    'label',
])

<div class="checkbox-theme-default custom-checkbox ">
    <input class="checkbox" type="checkbox" id="{{ $for }}">
    <label for="{{ $for }}">
       <span class="checkbox-text">
            {{ $label }}
       </span>
    </label>
 </div>