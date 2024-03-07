@props(['type' => null, 'message' => null])
<main class="w-full main-content-smallNav ">
<div class="alert alert-{{ $type }}  z-10 w-max rounded-[10px] p-3 my-5 " role="alert" style="background-color:#b3eaba;color:#016e10;width:100%">
    <div class="alert-content ">
        {{ $message }}
    </div>
 </div>
</main>    
