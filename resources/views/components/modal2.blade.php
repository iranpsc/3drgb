@props(['id' => null, 'title' => null , 'footer' => null])


<div id="myModal"
class="modal-avatar-smallNav hidden w-[100%]  fixed top-0 z-[80]  overflow-y-auto pointer-events-none bg-white dark:bg-[#1A1A18] h-screen mt-0 pt-0  flex flex-col justify-center items-center" wire:ignore.self>
<div
    class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500   ease-out transition-all    ">
    <div
        class="flex flex-col   pointer-events-auto   dark:shadow-slate-700/[.7]  ">
        <div class="flex justify-between items-center p-5 border-b dark:border-black">
            <h6 class="font-bold text-gray-800 dark:text-white">
                {{ $title }}
            </h6>
            <button type="button"
                class="close flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                data-hs-overlay="#hs-slide-up-animation-modal-02">
                
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
    </div>
</div>
<script>
    // Get modal element
    const modal = document.getElementById("myModal");

    // Get open modal button
    const openModalBtn = document.getElementById("openModalBtn");

    // Get close button
    const closeModalBtn = document.querySelector(".close");

    // Open modal
    openModalBtn.addEventListener("click", () => {
        modal.style.display = "block";
    });

    // Close modal
    closeModalBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Close modal if user clicks outside the modal content
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
</script>
</div>

