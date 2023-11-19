@props(['id' => null, 'title' => null])

<div class="modal-colored-success modal fade show" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
       <div class="modal-content modal-bg-success modal-colored">
          <div class="modal-header">
             <h6 class="modal-title">{{ $title }}</h6>
             <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <img src="{{ asset('img/svg/x.svg') }}" alt="x" class="svg">
             </button>
          </div>
          <div class="modal-body">
            {{ $slot }}
          </div>
          <div class="modal-footer">
            {{ $footer }}
          </div>
       </div>
    </div>
 </div>
 <!-- ends: .modal-colored-success -->