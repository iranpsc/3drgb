@props(['name', 'label'])

<div class="row form-group">
    <label for="{{ $name }}" class="col-sm-4 col-form-label">{{ $label }}</label>
    <div class="col-sm-8">
        <input class="form-control custom-file-input" type="file" id="{{ $name }}" {{ $attributes }}>
        @error($name)
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>