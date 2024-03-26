@props([
   'title',
   'actionBtn' => false,
   'actionBtnLink' => '#',
   'actionBtnText' => 'Create',
   'toggle' => null,
   'target' => null
])

<div class="w-full main-content-smallNav px-5 lg:px-0">
         <div class="flex flex-col justify-between px-5 gap-6 mb-10  mx-auto mt-14" style="width:90%">
             <div class="breadcrumb-action justify-content-center flex-wrap mt-10 lg:mt-0">
                <nav aria-label="breadcrumb" >
                   <ol class="flex gap-1 text-[#828282] p-3 items-center lg:w-[70%] xl:w-[80%] bg-white dark:bg-[#001448] rounded-[10px] margin: right 100px; ">
                      <li ><a href="{{ route('home') }}"><i></i>خانه &nbsp /</a> &nbsp </li>
                      <li class="font-bold " aria-current="page">{{ $title }}</li>
                   </ol>
                </nav>
             </div>
             <div>
               <h4 class="text-2xl font-bold px-2 dark:text-white" style="margin-right 100px;">{{ $title }}</h4>
             </div>
         </div>
         <div class="w-full lg:w-[70%] bg-white dark:bg-[#001448] rounded-xl dark:text-white p-5 lg:p-7 mx-auto">
            <div >
               <div >
                  <div >
                     <div >
                        <div >
                           <div class="font-bold pb-5">
                              {{ $title }}
                           </div>
                           @if ($actionBtn)
                              <div class="p-5 px-0">
                                 <a href="{{ $actionBtnLink }}"  data-bs-toggle="{{ $toggle }}" class="rounded-[10px] bg-blue-600 px-5 py-1"
                                 data-bs-target="{{ $target }}" data-hs-overlay="#hs-slide-up-animation-modal-02">{{ $actionBtnText }}</a>
                              </div>
         
                           @endif
                        </div>
                     </div>
                  </div>
                  <div >
                     <div >
                        {{ $slot }}
                     </div>
                  </div>
               </div>

            </div>
         </div>
 </div>
