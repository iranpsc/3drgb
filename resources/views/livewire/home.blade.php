@section('title')
@section('description')
@section('keywords')
@section('og:title', 'سه بعدی متا')
@section('og:description' )
@section('og:image')
<div>
    <main>
        <section>
            <div class="bg-[#000BEEF7] w-full py-[10px] text-white text-sm hidden lg:block px-5"
                style="font-family: rokh">
                <div class="flex items-center justify-between max-w-[1500px] mx-auto">
                    <div>
                        <a href="http://localhost:8000/login" class="px-4">قوانین و مجوزات</a>
                        <a href="#" class="px-4 border-x"> سوالات متداول </a>
                        <a href="#" class="px-4"> سیاست حفظ حریم خصوصی </a>
                    </div>
                    <div class="flex gap-4">
                        <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (1).png"
                                    alt="social"></a></div>
                        <div><a href="https://www.instagram.com/3d.irpsc?igsh=ZzRhNXVndXZldXYy"><img
                                    src="https://3d.irpsc.com/home-page/images/Union (2).png" alt="social"></a></div>
                        <div><a href="whatsapp://send?text=http://+989337850551"><img
                                    src="https://3d.irpsc.com/home-page/images/Union (3).png" alt="social"></a></div>
                        <div><a href="mailto:dmeta.irpsc@gmail.com"><img
                                    src="https://3d.irpsc.com/home-page/images/Union (4).png" alt="social"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <div class="bg-[#ECF4FE] dark:bg-[#4A4E7C] w-full relative    ">
                <div
                    class="w-full mx-auto flex flex-col md:flex-row items-ctener justify-between  gap-10 px-10 md:px-10  py-5 lg:px-20 ">
                    <div class="w-full md:w-3/5 flex flex-col justify-center mt-20 lg:mt-0">
                        <img src="{{ asset('home-page/images/Asset2.png') }}" alt="3dmodel"
                            class="md:hidden w-full mx-auto">
                        <p class="text-[#000BEE] dark:text-white py-3 text-head text-6xl text-center md:text-right leading-10"
                            style="font-family:rokh-ebold">
                            مدل سه بعدی و تجربه ای متفاوت
                        </p>
                        <p class="text-stone-800 dark:text-[#ffffff] font-bold text-xl lg:text-2xl mt-5 text-center md:text-right"
                            style="line-height: 50px">
                            ما اینجا هستیم تا روزانه محصولات سه بعدی را در اختیار شما طراحان قرار دهیم . سامانه سه بعدی
                            متا با
                            تعرفه ای
                            ثابت مرکز عرضه جدید ترین مدل سه بعدی ، آیکون ، انیمیشن و دیگر فایل های طراحی میباشد .
                        </p>
                        <div class="flex gap-5 relative mt-20 hidden lg:flex">
                            <input type="text" wire:model="searchTerm" placeholder="جستجوی محصول"
                                class="relative w-full p-5 placeholder:text-[#ACB9FA] font-bold bg-[#D8E5FD] text-gray-500 dark:text-gray-400  dark:bg-[#001448c9] rounded-[32px] focus:outline-none pr-12 md:px-20 border-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="absolute right-5 top-5">
                                <path class="dark:stroke-white"
                                    d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z"
                                    stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667" stroke="#000BEE"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <button type="button" wire:click="search"
                                class="bg-[#000BEE] dark:bg-[#C2008C] text-white font-bold md:text-xl pb-5 pt-[18px] px-5 md:px-14 w-max rounded-[32px]  text-center">جستجو</button>
                        </div>
                    </div>
                    <div class="w-full flex items-center justify-end md:w-1/2 flex-col overflow-hidden">
                        <img src="{{ asset('home-page/images/Asset2.png') }}" alt="3dmodel" class="hidden md:block"
                            style="width: 125%; max-width:none; ">
                        <div class="flex   mt-5 bg-[#D8E5FD] dark:bg-[#001448c9] rounded-full  p-2 lg:hidden">
                            <div class="flex justify-center items-center p-3 w-min">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="dark:stroke-white"
                                        d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z"
                                        stroke="#000BEE" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667"
                                        stroke="#000BEE" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="text" wire:model="searchTerm" placeholder="جستجوی محصول"
                                class=" w-full mr-[-14px]  placeholder:-[#ACB9FA] text-gray-500 dark:text-gray-400 font-bold ring-transparent outline-transparent    focus:!outline-0  focus:!right-0 border-0 focus:border-0 ring-offset-0  focus:ring-transparent     bg-transparent">
                            <button wire:click="search"
                                class="bg-[#000BEE] dark:bg-[#C2008C] text-white font-bold md:text-xl pb-4 pt-[15px]  px-5 w-[30%] lg:w-[20%] rounded-[32px]  text-center  min-w-max ">جستجو</button>
                        </div>
                    </div>
                </div>
            </div>
            <img id="home-img2" src="{{ asset('home-page/images/output-onlinepngtools.png') }}" alt="body"
                class="mt-250 hidden dark:block  w-full  overflow-hidden mb-36 2xl:mt-[-185px] mt-250">
            <img id="home-img" src="{{ asset('home-page/images/helal.png') }}" alt="body"
                class=" dark:hidden w-full  overflow-hidden mb-36 2xl:mt-[-185px] mt-250">

        </div>

        <section class="w-full mx-auto max-w-[1500px]  p-5" style="margin-top: -140px">
            <div class=" space-y-5 md:space-y-10">
                <div class="w-full flex justify-center flex-col items-center gap-4 space-y-5 py-10">
                    <p class="text-stone-800 dark:text-[#ffffff] font-bold text-2xl">
                        محصولات ما
                    </p>
                    <p class="text-[#000BEE] dark:text-[#E8E9FF] font-extrabold text-4xl"
                        style="font-family:rokh-ebold;">
                        هزاران فایل بینظیر
                    </p>
                </div>
                <div >
                    <!-- Swiper -->
                    
                        
                            <livewire:top-level-category-slider />
                        
                        
                    
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-y-10 gap-x-20 w-full px-5 mt-28 py-32">
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('home-page/images/222-min.png') }}" alt="3dmodel">
                </div>
                <div class="flex flex-col  w-full md:w-1/2 items-center md:items-start justify-center">
                    <p class="text-[#000BEE] dark:text-[#E8E9FF] font-extrabold text-[30px]  text-center"
                        style="font-family:rokh-ebold ;">
                        مدل های سه بعدی
                    </p>
                    <p class="text-stone-800 dark:text-[#D1D1D1] font-medium leading-[30px] text-center">
                        کیفیت طراحی های خود را با استفاده از مدل های سه بعدی افزایش دهید .
                    </p>
                    <a href="{{ route('products') }}"
                        class="mt-5 text-[#000BEE] text-base md:text-xl dark:text-[#E8E9FF] bg-[#CDD6FC] dark:bg-[#C2008C] px-5 py-3 rounded-3xl font-bold lg:text-2xl w-max flex items-center justify-center gap-6 md:gap-10">
                        <p class="m-0 p-0">
                            لیست مدل های سه بعدی
                        </p>
                        <img src="{{ asset('home-page/images/Union.png') }} ">
                    </a>
                </div>
            </div>
        </section>
        <section class="w-full mx-auto  max-w-[1500px] -mt-10">
            <!-- start slyder -->
            <div class="flex flex-col  md:mt-32  w-full">
                <div class="w-full flex-col relative  ">
                    <div class="flex flex-col  gap-3 px-5 text-center md:text-right">
                        <p class="text-[26px] md:text-4xl text-[#000BEE] dark:text-[#E8E9FF] font-extrabold   p-0 m-0 "
                            style="font-family:rokh-ebold ;">
                            دسته بندی های پر طرفدار
                        </p>
                        <p class="text-base text-stone-800 dark:text-[#ffffff] ">لیستی از محصولات سه بعدی ، انیمیشن
                            آیکون
                            و فایل
                            های ایلستریتور</p>
                    </div>

                    <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden py-5 my-5 pl-5 md:pl-0"
                        dir="ltr">
                        <div
                            class="h-full flex overflow-x-scroll scrollbar lg:gap-7 gap-5 items-center justify-start transition ease-out duration-700 ">
                            @forelse ($this->popularCategories as $category)
                                <div class="flex flex-shrink-0 relative  ">
                                    <a href="{{ route('categories.show', ['category_link' => $category->url]) }}"
                                        class="bg-white dark:bg-[#001448] p-3 pb-7   w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-7 text-center">
                                        <div class="w-full ">
                                            <img src="{{ asset($category->image?->url) }}" loading="lazy"
                                                alt="category" class="w-full rounded-xl">
                                        </div>
                                        <div>
                                            <p
                                                class="text-[#000BEE] dark:text-[#E8E9FF] text-xl md:text-3xl font-bold">
                                                {{ $category->name }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <x-alert type="warning" message="دسته بندی یافت نشد" />
                            @endforelse
                        </div>
                    </div>
                    <div class="absolute  md:top-7 flex w-full justify-center md:w-max md:left-0 gap-5 items-center">

                        <div>
                            <a href="{{ route('categories') }}"
                                class="text-[#000BEE] dark:bg-[#c2008b36] dark:text-[#E8E9FF] bg-[#CDD6FC] px-3 md:px-5 py-3 rounded-3xl font-bold text-lg md:text-xl">مشاهده
                                همه</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slyder -->
        </section>
        <section class="w-full mt-32 mx-auto flex justify-center items-center max-w-[1500px] px-5 lg:px-0">
            <div
                class="w-full text-center flex flex-col justify-center items-center xl:flex-row gap-5 gap-y-10 py-12 xl:py-16 px-7 rounded-3xl bg-[#000ceec2] dark:bg-[#001448] ">
                <div class="lg:w-[70%]">
                    <h2 class="text-white text-3xl 2xl:text-5xl !leading-[70px]  text-center "
                        style="font-family:rokh ;">“خدمات طراحی محیط های سه بعدی <br>به صورت Low-Poly و High-Poly”
                    </h2>
                </div>
                <a href="{{ route('submit-order') }}"
                    class="lg:w-max h-max bg-white dark:bg-[#4A4E7C] text-[#000BEE] dark:text-white font-bold md:text-xl rounded-full px-5 md:px-10 py-6 w-max mx-auto flex items-center gap-6 md:gap-10">
                    <p class="m-0 p-0 ">
                        نمونه کار و ثبت سفارش
                    </p>
                    <img src="{{ asset('home-page/images/Union.png') }}" alt="">
                </a>
            </div>
        </section>
        <section class="w-full max-w-[1500px] mx-auto px-5 lg:px-0">
            <div>
                <p class="text-4xl font-bold text-[#000BEE] dark:text-[#E8E9FF] mt-32 text-center py-3"
                    style="font-family:rokh-ebold ;">محصولات ما</p>
            </div>
            <div class="mx-auto  w-full ">
                <div class="py-4">
                    <nav class="flex justify-center gap-2  lg:text-2xl font-bold py-5" aria-label="Tabs"
                        role="tablist" style="font-family:rokh ;">
                        <button type="button"
                            class="px-3  sortbtn items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black active"
                            id="order-by-score" aria-controls="tabs-with-underline-1" role="tab">
                            بالاترین امتیاز
                        </button>
                        <button type="button"
                            class="px-4 sortbtn border-x-2 border-gray-400  items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black"
                            id="order-by-newest" aria-controls="tabs-with-underline-2" role="tab">
                            جدید ترین
                        </button>
                        <button type="button"
                            class="px-3 sortbtn items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black"
                            id="order-by-sales" aria-controls="tabs-with-underline-3" role="tab">
                            پرفروش ترین
                        </button>
                    </nav>
                </div>

            </div>
            <div class="relative ">
                <div class="swiper-slider swiper-container  overflow-x-hidden " dir="rtl" wire:ignore>
                    <div class="swiper-wrapper">

                        <!-- start card -->
                        @forelse ($products as $product)
                            <div class="swiper-slide flex w-full" wire:key="product-{{ $product->id }}">
                                <livewire:product-item :$product :key="'product-' . $product->id" />
                            </div>
                        @empty
                            <x-alert type="warning" message="محصولی یافت نشد" />
                        @endforelse
                        <!-- end card -->

                    </div>
                </div>
            </div>
            <!-- end show more products -->
        </section>
    </main>
</div>
@script
    <script>
        const buttons = document.querySelectorAll("#order-by-score, #order-by-newest, #order-by-sales");

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                $wire.call('changeTab', button.id);
                buttons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");
            });
        });

        // slider
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 300;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.4) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 300;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);

        //slyder end
    </script>
@endscript
