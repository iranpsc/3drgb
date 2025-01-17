@props(['id' => null, 'title' => null , 'footer' => null])


    <div id="hs-modal"
        class="hidden fixed inset-0 top-0  z-[7080] overflow-x-hidden overflow-y-auto flex flex-col modal-avatar-smallNav bg-white dark:bg-[#1A1A18] h-screen mt-0 pt-0">
        <div class="mt-14 lg:mt-0 ease-out transition-all">
            <div
                class="flex flex-col justify-between pointer-events-auto  w-full h-screen">
                <div class="flex justify-between items-center p-5 border-b dark:border-black">
                    <h6 class="font-bold text-gray-800 dark:text-white">
                        {{ $title }}
                    </h6>
                    <button type="button" id="close-modal-btn"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto flex flex-col gap-5 h-full rounded-xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>


<!-- Buttons to trigger modal -->
<div class="flex gap-4 mt-8">
    <button id="open-modal-btn"
        class="px-11 py-[14.5px] bg-primery-blue dark:bg-dark-yellow rounded-[10px] dark:text-black text-white">
        ساخت آواتار
    </button>
</div>

<script>
    // Selecting modal elements
    const modal = document.getElementById("hs-modal");
    const openModalBtn = document.getElementById("open-modal-btn");
    const closeModalBtn = document.getElementById("close-modal-btn");

    // Open modal function
    const openModal = () => {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    };

    // Close modal function
    const closeModal = () => {
        modal.classList.remove("flex");
        modal.classList.add("hidden");
    };

    // Event listeners
    openModalBtn.addEventListener("click", openModal);
    closeModalBtn.addEventListener("click", closeModal);

    // Close modal when clicking outside the content
    modal.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
</script>

