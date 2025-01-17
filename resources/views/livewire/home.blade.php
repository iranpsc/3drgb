@section('title')
@section('description')
@section('keywords')
@section('og:title', 'سه بعدی متا')
@section('og:description')
@section('og:image')
    <div>     
        <main>
            <section>
                <div class="bg-[#000BEEF7] dark:bg-[#E59819] w-full py-[10px] text-white text-sm hidden lg:block px-5"
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
                <div class="bg-[#ECF4FE] dark:bg-[#1A1A18] w-full relative    ">
                    <div
                        class="w-full mx-auto flex flex-col md:flex-row items-ctener justify-between  gap-10 px-10 md:px-10  py-5 lg:px-20 ">
                        <div class="w-full md:w-3/5 flex flex-col justify-center mt-20 lg:mt-0">
                            <img src="{{ asset('home-page/images/Asset2.png') }}" alt="3dmodel"
                                class="md:hidden w-full mx-auto">
                            <p class="text-[#000BEE] dark:text-[#FFFFFF] py-3 text-head text-6xl text-center md:text-right leading-[60px]"
                                style="font-family:rokh-ebold">
                                مدل سه بعدی و تجربه ای متفاوت
                            </p>
                            <p class="text-stone-800 dark:text-[#FFFFFF] font-bold text-xl lg:text-2xl mt-5 text-center md:text-right"
                                style="line-height: 50px">
                                ما اینجا هستیم تا روزانه محصولات سه بعدی را در اختیار شما طراحان قرار دهیم . سامانه سه بعدی
                                متا با
                                تعرفه ای
                                ثابت مرکز عرضه جدید ترین مدل سه بعدی ، آیکون ، انیمیشن و دیگر فایل های طراحی میباشد .
                            </p>
                            <div class="flex gap-5 relative mt-20 hidden lg:flex">
                                <input type="text" wire:model="searchTerm" placeholder="جستجوی محصول"
                                    class="relative w-full p-5 placeholder:text-primery-blue font-bold bg-[#D8E5FD] text-gray-500 dark:text-[#C1C1C1] dark:placeholder:text-[#C1C1C1]  dark:bg-black rounded-[32px] focus:outline-none focus:ring-0 focus:border-0 pr-12 md:px-20 border-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="absolute right-5 top-5">
                                    <path class="dark:stroke-white"
                                        d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z"
                                        stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667" stroke="#000BEE"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <button type="button" wire:click="search"
                                    class="bg-[#000BEE] dark:bg-[#E59819] text-white dark:text-black font-bold md:text-xl pb-5 pt-[18px] px-5 md:px-14 w-max rounded-[32px]  text-center">جستجو</button>
                            </div>
                        </div>
                        <div class="w-full flex items-center justify-end md:w-1/2 flex-col overflow-hidden">
                            <img src="{{ asset('home-page/images/Asset2.png') }}" alt="3dmodel" class="hidden md:block"
                                style="width: 125%; max-width:none; ">
                            <div class="flex   mt-5 bg-[#D8E5FD]   dark:bg-black  rounded-full  p-2 lg:hidden">
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
                                    class=" w-full mr-[-14px]  placeholder:text-primery-blue dark:placeholder:text-[#C1C1C1] text-gray-500 dark:text-gray-400 font-bold ring-transparent outline-transparent    focus:!outline-0  focus:!right-0 border-0 focus:border-0 ring-offset-0  focus:ring-transparent     bg-transparent">
                                <button wire:click="search"
                                    class="bg-[#000BEE] dark:bg-[#E59819] dark:text-black text-white font-bold md:text-xl pb-4 pt-[15px]  px-5 w-[30%] lg:w-[20%] rounded-[32px]  text-center  min-w-max ">جستجو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <img id="home-img2" src="{{ asset('home-page/images/output-onlinepngtools.png') }}" alt="body"
                    class="mt-250 hidden dark:block  w-full  overflow-hidden mb-36 2xl:mt-[-185px] mt-250 select-none">
                <img id="home-img" src="{{ asset('home-page/images/helal.png') }}" alt="body"
                    class=" dark:hidden w-full  overflow-hidden mb-36 2xl:mt-[-185px] mt-250 select-none">

            </div>

            <section class="w-full mx-auto max-w-[1500px] pt-5  px-5 lg:px-9 3xl:px-0" style="margin-top: -140px">
                <div class=" space-y-5 md:space-y-10">
                    <div class="w-full flex justify-center flex-col items-center gap-4 space-y-5 py-10">
                        <p class="text-stone-800 dark:text-[#D1D1D1] font-bold text-2xl">
                            محصولات ما
                        </p>
                        <p class="text-[#000BEE] dark:text-[#E8E9FF] font-extrabold text-4xl"
                            style="font-family:rokh-ebold;">
                            هزاران فایل بینظیر
                        </p>
                    </div>
                    <div>
                        <!-- Swiper -->
                        <livewire:top-level-category-slider />
                        <!-- Swiper -->
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
                            class="mt-5 text-[#000BEE] text-base md:text-xl dark:text-black bg-[#CDD6FC] dark:bg-dark-yellow  px-5 py-3 rounded-3xl font-bold lg:text-2xl w-max flex items-center justify-center gap-6 md:gap-10">
                            <p class="m-0 p-0">
                                لیست مدل های سه بعدی
                            </p>
                            <svg width="29" height="22" viewBox="0 0 29 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="dark:fill-black" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 0C9.44772 0 9 0.447715 9 1C9 3.84609 7.67935 5.92053 5.97199 7.39265C4.25137 8.87621 2.17172 9.71149 0.803669 10.0192C0.791773 10.0216 0.779936 10.0242 0.768166 10.027C0.696033 10.0441 0.626926 10.0691 0.561789 10.1009C0.46092 10.1499 0.370703 10.2149 0.293615 10.292C0.193146 10.392 0.113024 10.5144 0.061842 10.6534C0.0213566 10.7627 -0.000339508 10.8799 -0.000213623 11.0001C-0.00028038 11.0787 0.0089798 11.156 0.0267162 11.2306C0.0613613 11.3774 0.128351 11.5117 0.219749 11.6255C0.330452 11.7638 0.478315 11.8735 0.652571 11.9378C0.701506 11.956 0.75202 11.9704 0.803688 11.9808C2.17174 12.2885 4.25138 13.1238 5.97199 14.6074C7.67935 16.0795 9 18.1539 9 21C9 21.5523 9.44772 22 10 22C10.5523 22 11 21.5523 11 21C11 17.4461 9.32065 14.8539 7.27801 13.0926C6.80751 12.687 6.31601 12.3235 5.81819 12H28C28.5523 12 29 11.5523 29 11C29 10.4477 28.5523 10 28 10H5.81819C6.31601 9.6765 6.80751 9.31303 7.27801 8.90735C9.32065 7.14614 11 4.55391 11 1C11 0.447715 10.5523 0 10 0Z"
                                    fill="#000BEE" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section class="w-full mx-auto  max-w-[1500px]   lg:px-9 3xl:px-0 my-20 mb-[400px]">
                <div class="flex flex-col lg:flex-row gap-y-7 justify-between items-center ad-section">
                    <div class="background-shapes">
                        <div class="shape"></div>
                        <div class="shape"></div>
                        <div class="shape"></div>
                      </div>

                    <div class="flex flex-col gap-10 justify-start items-center w-full lg:w-[60%]">
                        <p class="text-[26px] md:text-4xl  px-14 py-10 text-[#000BEE]  dark:text-dark-yellow" style="font-family:rokh-ebold ;"> آواتار رویایی خود را رایگان بسازید! </p>
                        <p class="text-stone-800 dark:text-[#D1D1D1] font-medium leading-[30px] text-xl">
                            فقط با چند کلیک، یک اواتار سفارشی مطابق با سلیقه خودتان بسازید. کاملاً رایگان و بدون محدودیت!
                        </p>
                        <a href="{{ route('user.avatars') }}" class="bg-primery-blue rounded-2xl px-10 py-3 text-white dark:text-black dark:bg-dark-yellow lg:text-xl">همین حالا آواتار بسازید</a>
                    </div>
                    <div class="w-full h-screen" id="avatar-container"></div>
                </div>
            </section>
            <section class="w-full mx-auto  max-w-[1500px]   lg:px-9 3xl:px-0">
                <!-- start slyder -->
                <div class="flex flex-col  md:mt-32  w-full">
                    <div class="w-full flex-col relative  ">
                        <div class="flex flex-col  gap-3 px-5 text-center md:text-right">
                            <p class="text-[26px] md:text-4xl text-[#000BEE] dark:text-[#FFFFFF] font-extrabold   p-0 m-0 "
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
                                            class="bg-white dark:bg-[#1A1A18] p-3 pb-7  w-[160px] md:w-[190px] flex flex-col overflow-hidden rounded-[20px] justify-center items-center gap-7 text-center">
                                            <div class="w-full ">
                                                <img src="{{ asset($category->image->url ?? asset('home-page/images/default-product.jpg')) }}" loading="lazy"
                                                    alt="دسته {{ $category->name }}" class="w-full rounded-xl">
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
                                    class="text-[#000BEE] dark:bg-[#271A04] dark:text-[#E59819] bg-[#CDD6FC] px-3 md:px-5 py-3 rounded-3xl font-bold text-lg md:text-xl">مشاهده
                                    همه</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slyder -->
            </section>
            <section class="w-full mt-32 mx-auto flex justify-center items-center max-w-[1500px] px-5 lg:px-9 3xl:px-0">
                <div
                    class="w-full text-center flex flex-col justify-center items-center xl:flex-row gap-5 gap-y-10 py-12 xl:py-16 px-7 rounded-3xl bg-[#000ceec2] dark:bg-gradient-to-tl to-[#012F65] from-[#014AA0] ">
                    <div class="lg:w-[70%]">
                        <h2 class="text-white text-3xl 2xl:text-5xl !leading-[70px]  text-center "
                            style="font-family:rokh ;">“خدمات طراحی محیط های سه بعدی <br>به صورت Low-Poly و High-Poly”
                        </h2>
                    </div>
                    <a href="{{ route('submit-order') }}"
                        class="lg:w-max h-max bg-white dark:bg-gradient-to-r  to-[#416A9A] via-[#365E8E] from-[#27507F] text-[#000BEE] dark:text-white font-bold md:text-xl rounded-full px-5 md:px-10 py-6 w-max mx-auto flex items-center gap-6 md:gap-10">
                        <p class="m-0 p-0 ">
                            نمونه کار و ثبت سفارش
                        </p>
                        <svg width="29" height="22" viewBox="0 0 29 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 0C9.44772 0 9 0.447715 9 1C9 3.84609 7.67935 5.92053 5.97199 7.39265C4.25137 8.87621 2.17172 9.71149 0.803669 10.0192C0.791773 10.0216 0.779936 10.0242 0.768166 10.027C0.696033 10.0441 0.626926 10.0691 0.561789 10.1009C0.46092 10.1499 0.370703 10.2149 0.293615 10.292C0.193146 10.392 0.113024 10.5144 0.061842 10.6534C0.0213566 10.7627 -0.000339508 10.8799 -0.000213623 11.0001C-0.00028038 11.0787 0.0089798 11.156 0.0267162 11.2306C0.0613613 11.3774 0.128351 11.5117 0.219749 11.6255C0.330452 11.7638 0.478315 11.8735 0.652571 11.9378C0.701506 11.956 0.75202 11.9704 0.803688 11.9808C2.17174 12.2885 4.25138 13.1238 5.97199 14.6074C7.67935 16.0795 9 18.1539 9 21C9 21.5523 9.44772 22 10 22C10.5523 22 11 21.5523 11 21C11 17.4461 9.32065 14.8539 7.27801 13.0926C6.80751 12.687 6.31601 12.3235 5.81819 12H28C28.5523 12 29 11.5523 29 11C29 10.4477 28.5523 10 28 10H5.81819C6.31601 9.6765 6.80751 9.31303 7.27801 8.90735C9.32065 7.14614 11 4.55391 11 1C11 0.447715 10.5523 0 10 0Z"
                                fill="#000BEE" />
                        </svg>
                    </a>
                </div>
            </section>
            <section class="w-full max-w-[1500px] mx-auto px-5 lg:px-9 3xl:px-0">
                <div>
                    <p class="text-4xl font-bold text-[#000BEE] dark:text-[#FFFFFF] mt-32 text-center py-3"
                        style="font-family:rokh-ebold ;">محصولات ما</p>
                </div>
                <div class="mx-auto  w-full ">
                    <div class="py-4">
                        <nav class="flex justify-center gap-2 lg:text-2xl font-bold py-5" role="tablist" style="font-family:rokh;">
                            <button type="button"
                                class="px-3 sortbtn items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black active"
                                id="order-by-score" aria-label="Sort by highest score" role="tab" aria-selected="true">
                                بالاترین امتیاز
                            </button>
                            <button type="button"
                                class="px-4 sortbtn border-x-2 border-gray-400 items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black"
                                id="order-by-newest" aria-label="Sort by newest" role="tab" aria-selected="false">
                                جدید ترین
                            </button>
                            <button type="button"
                                class="px-3 sortbtn items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1] dark:hover:text-white hover:text-black"
                                id="order-by-sales" aria-label="Sort by best selling" role="tab" aria-selected="false">
                                پرفروش ترین
                            </button>
                        </nav>
                    </div>                    
                </div>
                <div class="relative">
                    <div class="swiper-slider swiper-container overflow-x-hidden" dir="rtl" wire:ignore>
                        <div class="swiper-wrapper" id="products-slider">
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
            </section>
        </main>
    </div>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "ساخت آواتار رایگان",
          "description": "فقط با چند کلیک، یک آواتار سفارشی مطابق با سلیقه خودتان بسازید. کاملاً رایگان و بدون محدودیت!",
          "url": "https://3d.irpsc.com/avatars",
          "author": {
            "@type": "Organization",
            "name": "سبعدی متا"
          },
          "mainEntity": {
            "@type": "SoftwareApplication",
            "name": "ابزار ساخت آواتار",
            "operatingSystem": "All",
            "applicationCategory": "DesignApplication",
            "offers": {
              "@type": "Offer",
              "price": "0",
              "priceCurrency": "IRR",
              "availability": "https://schema.org/InStock"
            }
          }
        }
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.js"></script>
    <script>
        // تنظیم صحنه
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    
        const container = document.getElementById('avatar-container'); // دسترسی به div
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 5)); // بهبود کیفیت با نسبت پیکسلی دستگاه
        renderer.setSize(container.clientWidth, container.clientHeight);
        renderer.physicallyCorrectLights = true; // استفاده از نورپردازی فیزیکی واقعی
        container.appendChild(renderer.domElement); // الحاق به تگ div
    
        // تنظیم نور
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.1); // نور محیطی
        scene.add(ambientLight);
    
        const directionalLight = new THREE.DirectionalLight(0xffffff, 40.1);
        directionalLight.position.set(5, 10, 7.5);
        scene.add(directionalLight);
    
        const modelPath = "{{ asset('home-page/3dfiles/avatar.glb') }}"; // مسیر فایل
    
        const loader = new THREE.GLTFLoader();
        loader.load(
            modelPath,
            function (gltf) {
                const model = gltf.scene;
                model.position.set(0, -1, 0); // تنظیم موقعیت مدل
                scene.add(model);
                camera.position.z = 1.3; // فاصله دوربین از مدل
    
                // بهبود متریال مدل
                model.traverse((node) => {
                    if (node.isMesh) {
                        node.material.roughness = 0.5; // کاهش زبری سطح
                        node.material.metalness = 0.8; // افزایش حالت فلزی
                    }
                });
    
                // چرخش مدل
                function animate() {
                    requestAnimationFrame(animate);
                    model.rotation.y += 0.01; // چرخش مدل حول محور Y
                    renderer.render(scene, camera);
                }
                animate();
            },
            function (xhr) {
                console.log((xhr.loaded / xhr.total * 100) + '% loaded');
            },
            function (error) {
                console.error('An error occurred:', error);
            }
        );
    
        // تنظیم ریسایز صفحه
        window.addEventListener('resize', () => {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        });
    </script>

    @script
        <script>
            let buttons = document.getElementsByClassName("sortbtn");

            buttons = Array.from(buttons);

            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    console.log(button.id);
                    $wire.call('changeTab', button.id);
                    buttons.forEach(btn => btn.classList.remove("active"));
                    button.classList.add("active");
                });
            });

            let swiper = new Swiper('.swiper-slider', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            spaceBetween: 12,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            // Responsive breakpoints
            breakpoints: {
                1550: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                // when window width is <= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is <= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 12
                }
            }
        });
        </script>

    @endscript
