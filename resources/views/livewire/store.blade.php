@section('title')
@section('description')
@section('keywords')
@section('og:title')
@section('og:description')
@section('og:image')
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
                                    src="https://3d.irpsc.com/home-page/images/Union (2).png" alt=""></a></div>
                        <div><a href="whatsapp://send?text=http://+989337850551"><img
                                    src="https://3d.irpsc.com/home-page/images/Union (3).png" alt=""></a></div>
                        <div><a href="mailto:dmeta.irpsc@gmail.com"><img
                                    src="https://3d.irpsc.com/home-page/images/Union (4).png" alt=""></a></div>
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
                    <a href="#" class="text-[#828282] font-bold">فروشگاه</a>
                </div>
                <div
                    class="flex items-center justify-center lg:w-[30%] xl:w-[20%] bg-white dark:bg-[#001448] rounded-[10px] gap-1 text-[#828282] p-3">
                    <span>دسته بندی : </span>
                    <a href="#">مدل سه بعدی </a>
                </div>
            </div>

            <div class="w-full relative mt-10">
                <!-- Swiper -->
                <div class="swiper-slider swiper-container  overflow-x-hidden p-0" dir="ltr" wire:ignore>
                    <div class="swiper-wrapper ">
                        <livewire:top-level-category-slider />
                    </div>
                    <!-- Add Pagination -->


                </div>
            </div>
        </section>
        <section class="max-w-[1500px] mx-auto  lg:p-9 mt-24 lg:mt-14 flex flex-col lg:flex-row gap-5 ">
            <div id="fillterContainer"
                class="hidden h-min absolute top-0 lg:top-0 rounded-[10px] z-[1100]  lg:relative lg:block w-full lg:w-1/4 lg:p-5 space-y-6 bg-white dark:bg-[#001448] lg:bg-transparent ">
                <div class="w-full bg-white dark:bg-[#001448] lg:rounded-[10px] p-5 ">
                    <div class="flex justify-between items-center px-4 py-3">
                        <p class="text-[#FAB62F]  text-xl">همه</p>
                        <button onclick="closeFillterContainerMobile()"
                            class="rounded-full bg-[#EFEFEF] rotate-45 lg:hidden w-10 h-10 text-3xl">+</button>
                    </div>
                    <div class="space-y-2 items">
                        @forelse ($this->categories as $category)
                            <div class="item ">
                                <div
                                    class=" w-full px-2 py-1 dark:text-gray-300 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-[#848383] disabled:opacity-50 disabled:pointer-events-none">
                                    <a href="javascript::void(0)"
                                        wire:click="getPorductsByCategory({{ $category->id }})"
                                        class="w-full">{{ $category->name }}
                                    </a>
                                    <span class="text-xs text-right">{{ $category->products_count }}</span>
                                </div>
                            </div>
                        @empty
                            <div class="w-full">
                                <span class="dark:text-gray-300 p-2 text-[#848383]">دسته ای وجود ندارد</span>
                            </div>
                        @endforelse

                    </div>
                </div>
                <div
                    class="w-full  bg-white dark:bg-[#001448] lg:rounded-[10px] p-5 text-[#848383] dark:text-[#F8F8F8] space-y-5">
                    <div>
                        <p>
                            فیلتر براساس قیمت ( تومان )
                        </p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="multi-range">
                            <input type="range" min="0" max="10000000" value="0" step="1"
                                id="minPrice" wire:model.live.debounce.500ms="price_filter.min">
                            <input type="range" min="0" max="9000000" value="479900" step="1"
                                id="maxPrice" wire:model.live.debounce.500ms="price_filter.max">
                        </span>
                    </div>
                    <div class="flex items-center gap-3">
                        <p id="priceFillterMin">{{ $price_filter['min'] }}  تومان </p>
                        <hr class="border w-10">
                        <p id="priceFillterMax"> {{ $price_filter['max'] }} تومان</p>
                    </div>
                </div>
                <div
                    class="w-full bg-white dark:bg-[#001448] lg:rounded-[10px] p-5 text-[#848383] dark:text-[#F8F8F8] text-sm  space-y-5">
                    <div>
                        <p class="text-xl font-bold text-[#515151] dark:text-white py-2">برچسب ها</p>
                    </div>
                    <div class="grid grid-cols-2 gap-5 items2">
                        @foreach ($tags as $tag)
                            <div class="flex items-center gap-5 item2">
                                <input type="radio" id="{{ 'tag-' . $tag->id }}" value="{{ $tag->slug }}"
                                    class="w-[22px] h-[22px] rounded-lg" wire:model.live="tag">
                                <label for="{{ 'tag-' . $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-3/4 space-y-5 p-5" id="products-list">
                <div class="flex flex-col-reverse lg:flex-row gap-6">
                    <div class="flex items-center gap-6 w-[100%] lg:w-[70%] scrollbar overflow-y-hidenn overflow-x-auto " style="height: 55px;">
                        <div class="font-bold dark:text-white w-max">
                            <p class="w-max hidden lg:block">مرتب سازی :</p>
                        </div>
                        <button onclick="fillterContainerMobile()"
                            class=" lg:hidden px-3 rounded-full py-1 transition-[5s] duration-500 text-[#848383]   items-center  whitespace-nowrap  dark:text-white dark:bg-[#001448]  bg-white flex  gap-3">
                            <p>فیلتر</p>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4.5H4" class="dark:stroke-white" stroke="#141B34" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 14.5H7" class="dark:stroke-white" stroke="#141B34" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 14.5H19" class="dark:stroke-white" stroke="#141B34" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 4.5H19" class="dark:stroke-white" stroke="#141B34" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path class="dark:stroke-white"
                                    d="M4 4.5C4 3.56812 4 3.10218 4.15224 2.73463C4.35523 2.24458 4.74458 1.85523 5.23463 1.65224C5.60218 1.5 6.06812 1.5 7 1.5C7.93188 1.5 8.3978 1.5 8.7654 1.65224C9.2554 1.85523 9.6448 2.24458 9.8478 2.73463C10 3.10218 10 3.56812 10 4.5C10 5.43188 10 5.89782 9.8478 6.26537C9.6448 6.75542 9.2554 7.14477 8.7654 7.34776C8.3978 7.5 7.93188 7.5 7 7.5C6.06812 7.5 5.60218 7.5 5.23463 7.34776C4.74458 7.14477 4.35523 6.75542 4.15224 6.26537C4 5.89782 4 5.43188 4 4.5Z"
                                    stroke="#141B34" stroke-width="1.5" />
                                <path class="dark:stroke-white"
                                    d="M10 14.5C10 13.5681 10 13.1022 10.1522 12.7346C10.3552 12.2446 10.7446 11.8552 11.2346 11.6522C11.6022 11.5 12.0681 11.5 13 11.5C13.9319 11.5 14.3978 11.5 14.7654 11.6522C15.2554 11.8552 15.6448 12.2446 15.8478 12.7346C16 13.1022 16 13.5681 16 14.5C16 15.4319 16 15.8978 15.8478 16.2654C15.6448 16.7554 15.2554 17.1448 14.7654 17.3478C14.3978 17.5 13.9319 17.5 13 17.5C12.0681 17.5 11.6022 17.5 11.2346 17.3478C10.7446 17.1448 10.3552 16.7554 10.1522 16.2654C10 15.8978 10 15.4319 10 14.5Z"
                                    stroke="#141B34" stroke-width="1.5" />
                            </svg>
                        </button>
                        <div role="tab">
                            <a class="nav-link @if ($orderBy['newest']) active @endif  px-3 rounded-full py-1 transition-[5s] duration-500 text-[#848383]  items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1]  text-xs md:text-base"
                                href="javascript::void(0)" wire:click="sortBy('newest')" role="tab"
                                aria-controls="ap-overview" aria-selected="false">جدید ترین</a>
                        </div>
                        <div role="tab">
                            <a class="nav-link @if ($orderBy['most-sales']) active @endif   px-3 rounded-full py-1 transition-[5s] duration-500 text-[#848383]  items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1]  text-xs md:text-base"
                                href="javascript::void(0)" wire:click="sortBy('most-sales')" role="tab"
                                aria-controls="draft" aria-selected="false">پر فروش ترین</a>
                        </div>
                        <div role="tab">
                            <a class="nav-link @if ($orderBy['most-expensive']) active @endif   px-3 rounded-full py-1 transition-[5s] duration-500 text-[#848383]  items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1]  text-xs md:text-base"
                                href="javascript::void(0)" wire:click="sortBy('most-expensive')" role="tab"
                                aria-controls="activity" aria-selected="false">گرانترین</a>
                        </div>
                        <div role="tab">
                            <a class="nav-link @if ($orderBy['cheapest']) active @endif   px-3 rounded-full py-1 transition-[5s] duration-500 text-[#848383]  items-center gap-2 whitespace-nowrap text-black/30 dark:text-[#D1D1D1]  text-xs md:text-base"
                                href="javascript::void(0)" wire:click="sortBy('cheapest')" role="tab"
                                aria-controls="timeline" aria-selected="false">ارزان ترین</a>
                        </div>
                    </div>

                    <div class="flex gap-5 relative w-full lg:w-[30%]">

                        <input type="text" id="input2" wire:model.live.debounce.500ms="search"
                            placeholder="جستجو"
                            class="relative w-full py-3 text-[#000cee57] dark:text-[#ACB9FA] font-bold bg-[#c4d8ff] dark:bg-[#001448c9] rounded-[32px] focus:outline-none pl-11 px-5 border-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="absolute left-5 top-3">
                            <path class="dark:stroke-white"
                                d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z"
                                stroke="#000BEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667" stroke="#000BEE"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
                <div>
                    <div id="tabs-with-underline-popular" role="tabpanel"
                        aria-labelledby="tabs-with-underline-item-popular"
                        class="flex flex-col gap-10 transition-[5s] duration-500 process">
                        <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-5 transition-[5s] duration-500 ">
                            <!-- start card -->
                            @forelse ($products as $product)
                                <div wire:key="{{ $product->id }}">
                                    <livewire:product-item :$product :key="'product-' . $product->id" />
                                </div>
                            @empty
                                <x-alert type="warning" message="محصولی یافت نشد" />
                            @endforelse
                        </div>
                        {{ $products->links(data: ['scrollTo' => '#products-list']) }}
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>

@push('styles')
<style>
    a.showMore {
        display: block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        margin-top: 20px;
        color: #0077C8;
        text-decoration: none;
    }

    a.showMore::after {
        content: "+ مشاهده همه ";
    }

    a.showMore.showLess::after {
        content: "- مشاهده کمتر ";
    }

    a.showMore2 {
        display: block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        margin-top: 20px;
        color: #0077C8;
        text-decoration: none;
    }

    a.showMore2::after {
        content: "+ مشاهده همه ";
    }

    a.showMore2.showLess2::after {
        content: "- مشاهده کمتر ";
    }
</style>
@endpush
