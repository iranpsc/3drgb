@props(['id' => null, 'title' => null])

<!-- ends: .modal-colored-success -->
<div class="flex flex-col items-center justify-center dark:text-gray-300">
    <div id="hs-slide-up-animation-modal-02"
        class="hs-overlay hidden w-[100%] fixed top-14  start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none mx-auto   flex flex-col justify-center items-center" wire:ignore.self>
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14  ease-out transition-all    ">
            <div
                class="flex flex-col bg-white  shadow-sm rounded-xl pointer-events-auto dark:bg-[#001448]  dark:shadow-slate-700/[.7]  ">
                <div class="flex justify-between items-center p-5 border-b dark:border-gray-700">
                    <h6 class="font-bold text-gray-800 dark:text-white">
                        {{ $title }}
                    </h6>
                    <button type="button"
                        class="hs-dropup-toggle flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        data-hs-overlay="#hs-slide-up-animation-modal-02">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto flex flex-col gap-5">

                    {{ $slot }}

                </div>


                <div class="flex justify-end items-center gap-x-2 p-5 border-t dark:border-gray-700">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</div>
