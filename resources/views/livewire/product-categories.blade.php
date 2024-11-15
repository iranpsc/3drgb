<div>
    <main>
        <section>
            <div class="bg-[#000BEEF7] w-full py-[10px] text-white text-sm hidden lg:block px-5" style="font-family: rokh">
                <div class="flex items-center justify-between max-w-[1500px] mx-auto">
                    <div>
                        <a href="#" class="px-4">قوانین و مجوزات</a>
                        <a href="#" class="px-4 border-x"> سوالات متداول </a>
                        <a href="#" class="px-4"> سیاست حفظ حریم خصوصی </a>
                    </div>
                    <div class="flex gap-4">
                        <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (1).png"
                                    alt=""></a></div>
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
        <section class="max-w-[1500px] mx-auto p-4 lg:p-9 lg:pt-0 mt-24 lg:mt-4">
            <div class="lg:flex gap-5 hidden">
                <div
                    class="flex gap-1 text-[#828282] p-3 items-center lg:w-[70%] xl:w-[80%] bg-white dark:bg-[#001448] rounded-[10px]">
                    <a href="{{ route('home') }}" class="text-[#828282] !font-medium">خانه</a>
                    <span>/</span>
                    <a href="#" class="text-[#828282] font-bold">دسته بندی محصولات</a>
                </div>
                <div
                    class="flex items-center justify-center lg:w-[30%] xl:w-[20%] bg-white dark:bg-[#001448] rounded-[10px] gap-1 text-[#828282] p-3">
                    <span>لیست دسته ها</span>
                </div>
            </div>
            <div class="w-full relative ">
                <!-- Swiper -->
                <div class="swiper-slider swiper-container  overflow-x-hidden " dir="ltr" wire:ignore>
                    <div class="swiper-wrapper ">
                        <livewire:top-level-category-slider />
                    </div>
                    <!-- Add Pagination -->
                </div>
            </div>
        </section>
        <section class="max-w-[1500px] mx-auto  lg:p-9 mt-24 lg:mt-14 flex flex-col lg:flex-row gap-5 ">

            <div class="w-full lg:w-3/4 space-y-5 p-5 mx-auto" id="products-list">
                <div >
                    <div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-5 transition-[5s] duration-500 ">
                        @if ($categories->isEmpty())
                            <x-alert type="warning" message="دسته بندی تعریف نشده است." />
                        @else
                            @foreach ($categories as $category)
                                <div class=" product">
                                    <div
                                        class="bg-[#ECF4FE] dark:bg-[#1A1A18] w-full flex flex-col overflow-hidden rounded-[20px]  items-center text-center p-2   duration-500 transition-all">
                                        <a href="{{ route('categories.show', ['category_link' => $category->url]) }}"
                                            class="p-1 w-full ">
                                            <img class="rounded-[10px]" src="{{ $category->image->url ?? asset('home-page/images/default-product.jpg') }}" loading="lazy" alt="دسته بندی {{ $category->name }}" onerror="this.onerror=null; this.src='{{ asset('home-page/images/default-product.jpg') }}';" >
                                        </a>
                                        <div class="w-full flex flex-col justify-center items-center gap-3">
                                            <a href="{{ route('categories.show', ['category_link' => $category->url]) }}"
                                                class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white py-[10px] ">{{ $category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $categories->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
