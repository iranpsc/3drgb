@props([
    'type' => 'button',
    'color' => 'primary',
    'size' => 'sm',
])

<button type="{{ $type }}" class="btn btn-{{ $color }} btn-{{ $size }} radius-xs px-15" {{ $attributes }}>
    {{ $slot }}
</button>