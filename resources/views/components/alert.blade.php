@props(['type' => null, 'message' => null])
<main class="w-full main-content-smallNav ">
<div class="alert alert-{{ $type }}  z-10 w-max rounded-[10px] p-3 my-5 " style="background-color: rgba(128, 128, 128, 0.377)" role="alert" >
    <div class="alert-content ">
        {{ $message }}
    </div>
 </div>
</main>
