@props(['for', 'label', 'type' => 'text'])

<div class="form-group row">
    <label for="{{ $for }}" class="form-col-label col-sm-4">{{ $label }}</label>
    <div class="col-sm-8">
        <input type="{{ $type }}" class="form-control ih-medium ip-light radius-xs b-light px-15" id="{{ $for }}" name="{{ $for }}">
    </div>
</div>