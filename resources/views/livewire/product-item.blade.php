 <!-- start card -->
 <div class=" product">
              <div 
                class="bg-white dark:bg-[#001448] w-full flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                <a href="{{ $product->url }}" class="p-3 w-[80%] ">
                  <img src="{{ $product->images->first()->url }}" alt="">
                </a>
                <div class="w-full flex flex-col justify-center items-center gap-3">
                  <p class="text-[#000BEE] dark:text-[#D1D1D1] text-xs lg:text-sm font-bold p-0 m-0">
                    سه بعدی/غذا
                  </p>
                  <a href="{{ $product->url }}" class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">{{ $product->name }}</a>
                  <p class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white ">{{ number_format($product->final_price, 0) }} تومان</p>

                  <div class="w-full flex justify-between gap-2 ">
                    
                  
                    @if (Auth::check() && Auth::user()->hasPurchased($product))
                        <x-button wire:click="download({{ $product->id }})" color="light" style="display: flex;justify-content: space-betweeng; align-items: center" size="block"><img src="{{ asset('img/svg/download.svg') }}" alt="download" class="svg">
                        دانلود
                        </x-button>
                    @else
                        <button type="button" @disabled(session('cart') && in_array($product->id, session('cart'))) wire:click="addToCart({{ $product->id }})" class="rounded-lg w-[60%] px-2 py-3 bg-[#FFE3E3] dark:bg-[#C2008C]  text-[#FF0000] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold">
                            افزودن به سبد خرید
                        </button>
                        <a type="button" href="{{ $product->url }}" class="rounded-lg w-[40%]  px-2 py-3 bg-[#D8E5FD] dark:bg-[#4A4E7C]  text-[#000BEE] dark:text-[#E8E9FF] m-0 text-xs lg:text-sm font-bold z-10 ">مشاهده سریع</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- end card -->