@props([
    'color' => 'primary',
    'size' => 'sm',
])

<button class="btn btn-{{ $color }} btn-{{ $size }}">
    {{ $slot }}
</button>