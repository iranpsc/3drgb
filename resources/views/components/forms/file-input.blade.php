@props(['for', 'label'])

<div class="custom-file">
    <input class="form-control custom-file-input" type="file" id="{{ $for }}">
    <label class="custom-file-label ps-15" for="{{ $for }}">{{ $label }}</label>
 </div>