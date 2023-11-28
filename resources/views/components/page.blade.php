@props([
   'title',
   'actionBtn' => false,
   'actionBtnLink' => '#',
   'actionBtnText' => 'Create',
   'toggle' => null,
   'target' => null
])

<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="breadcrumb-main">
             <h4 class="text-capitalize breadcrumb-title">{{ $title }}</h4>
             <div class="breadcrumb-action justify-content-center flex-wrap">
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="uil uil-estate"></i>خانه</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                   </ol>
                </nav>
             </div>
          </div>

       </div>
    </div>
    <div class="row">
       <div class="col-12">

          <div class="card">
             <div class="card-header color-dark fw-500">
               <div class="container-fluid">
                  <div class="d-flex justify-content-between">
                     <div>
                        {{ $title }}
                     </div>
                     @if ($actionBtn)
                        <div>
                           <a href="{{ $actionBtnLink }}" class="btn btn-primary" data-bs-toggle="{{ $toggle }}"
                           data-bs-target="{{ $target }}">{{ $actionBtnText }}</a>
                        </div>
                     @endif
                  </div>
               </div>
             </div>
             <div class="card-body py-2 px-0">
               <div class="container-fluid">
                  {{ $slot }}
               </div>
             </div>
          </div>

       </div>
    </div>
 </div>