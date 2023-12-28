@props(['name', 'label', 'type' => 'text'])

<div class="form-group row">
    <label for="{{ $name }}" class="form-col-label col-sm-4">{{ $label }}</label>
    <div class="col-sm-8">
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" {{ $attributes }}>
        @error($name)
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>