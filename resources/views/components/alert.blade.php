@props(['type' => null, 'message' => null])

<div class="alert alert-{{ $type }}" role="alert">
    <div class="alert-content">
        {{ $message }}
    </div>
 </div>