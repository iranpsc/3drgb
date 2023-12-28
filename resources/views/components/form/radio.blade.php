@props(['for', 'value', 'label'])

<div class="radio-theme-default custom-radio ">
    <input class="radio" type="radio" name="radio-default" value="{{ $value }}" name="{{ $for }}">
    <label for="{{ $for }}">
       <span class="radio-text">{{ $label }}</span>
    </label>
 </div>