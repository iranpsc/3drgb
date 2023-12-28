@props([
    'name',
    'label',
])

<div {{ $attributes->merge(["class" => "checkbox-theme-default custom-checkbox"]) }}>
    <input class="checkbox" type="checkbox" id="{{ $name }}">
    <label name="{{ $name }}">
       <span class="checkbox-text">
            {{ $label }}
       </span>
    </label>
 </div>