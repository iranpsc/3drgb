<x-layouts.app title="خطایی رخ داده است">
  <main class="w-full main-content-smallNav ">
    <div class="w-[85%] 2xl:w-[70%] mx-auto bg-white dark:bg-[#001448] rounded-2xl overflow-hidden mt-24 lg:mt-10">
          <div class="flex flex-col lg:flex-row justify-between w-full">
            <div class="text-[#000BEE] flex flex-col justify-between gap-8 w-full lg:w-[50%] dark:text-white mt-7 lg:mt-12">
               <div class="flex flex-col gap-8 p-5">
                <p class="text-xl lg:text-3xl">صفحه ای که در خواست دادید پیدا نشد..!</p>
                <p class="lg:text-xl">
                  صفحه ای که دنبال آن هستید وجود ندارد . از جستجو کردن کمک بگیرید یا به صفحه اصلی بروید .
                </p>
                <div class="flex gap-5 relative mt-5">
                  <input type="text"  wire:model.live.debounce.500ms="searchTerm" 
                    class="relative w-full p-5 text-[#ACB9FA] font-bold bg-[#D8E5FD] dark:bg-[#001448c9] rounded-full focus:outline-none pr-12 md:px-20 lg:py-[23px]">
                 
                  
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-5 top-5">
                          <path class="dark:stroke-white" d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z" stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667" stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
  
                  <button type="button" wire:click="search"
                    class="bg-[#000BEE] dark:bg-[#C2008C] text-white font-bold md:text-xl pb-4 pt-[15px]  px-5 w-[30%] lg:w-[20%] rounded-[32px]  text-center absolute left-[6px] top-[6px] min-w-max">جستجو</button>

                    
                </div>
               </div>
                 <img src="{{ asset('home-page/images/Rectangle 23998zzzz.png') }}" class="float-right mt-32 hidden lg:block dark:hidden">
                 <div class="hidden dark:block">
                    <img src="{{ asset('home-page/images/Rectangle 23998dark.png') }}" class="float-right mt-32 hidden lg:block dark:block ">
                 </div>
            </div>
            <div class="w-full h-full lg:w-[50%]">
                <div class="relative hidden lg:block">
                    <img src="{{ asset('home-page/images/Polygon 1.png') }}"  class="relative dark:hidden">
                    <img src="{{ asset('home-page/images/Polygon 1dark.png') }}"  class="relative  hidden dark:block">
                    <img src="{{ asset('home-page/images/g10.png') }}" alt="404 error" class="absolute top-[23%] left-[16%] w-[58%]"> 
                    
                   
                </div>
                <div class="w-full flex justify-end lg:hidden relative">
                  <img src="{{ asset('home-page/images/Rectangle 23999 (1).png') }}"  class="relative w-[90%] dark:hidden">
                  <img src="{{ asset('home-page/images/Rectangle 23999.png') }}"  class="relative w-[90%] hidden dark:block">
                  <img src="{{ asset('home-page/images/g10.png') }}" alt="404 error" class="absolute top-[21%] left-[4%] w-[58%] rotate-[-25deg]">
                  
                </div>
                
            </div>

          </div>
      </div>
</main>
</x-layouts.app>