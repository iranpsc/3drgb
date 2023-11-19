@props(['for', 'label'])

<div class="form-group select-px-15">
    <label for="{{ $for }}" class="il-gray fs-14 fw-500 align-center mb-10">{{$label}}</label>
    <select class="form-control px-15" id="{{ $for }}">
        {{ $slot }}
    </select>
 </div>