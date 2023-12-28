@props(['name', 'label'])

<div class="form-group row">
    <label for="{{ $name }}" class="form-col-label col-sm-4">{{$label}}</label>
    <div class="col-sm-8">
        <select class="form-control px-15 @error($name) is-invalid @enderror" name="{{ $name }}" {{ $attributes }} id="{{ $name }}">
            {{ $slot }}
        </select>
        @error($name)
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>
 </div>