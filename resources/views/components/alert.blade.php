@props(['type' => null])

<div class=" alert alert-{{ $type }} " role="alert">
    <div class="alert-content">
        {{ $slot }}
    </div>
 </div>