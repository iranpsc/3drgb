@props([
    'type' => 'button',
    'color' => 'primary',
    'size' => 'sm',
])

<button type="{{ $type }}" class=" bg-[#06CC85] w-full text-white font-bold text-center p-4 rounded-[10px] active:scale-105" {{ $attributes }}>
    {{ $slot }}
</button>