<div class="relative w-full">
    <div class="swiper-slider swiper-container  overflow-x-hidden " dir="ltr" wire:ignore>
        <div class="swiper-wrapper ">
            @forelse ($categories as $category)
                <div class="swiper-slide flex w-full mt-10">

                    <div class="w-full" wire:key="popular-category-{{ $category->id }}">
                        <a href="{{ route('categories.show', ['category_link' => $category->url]) }}"
                            class="w-full bg-white dark:bg-[#1A1A18] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-5 pb-7 gap-16">
                            <div class=" aspect-square w-full">
                                <img src="{{ $category->image->url ?? '' }}" loading="lazy" alt="{{ $category->name }}"
                                    class="w-full rounded-xl" onerror="this.onerror=null; this.src='{{ asset('home-page/images/default-product.jpg') }}';" >
                            </div>
                            <div class="flex flex-col justify-end ">
                                <p class="text-[#000BEE]  dark:text-[#E8E9FF] text-3xl font-bold p-0 mt-2"
                                    style="font-family:rokh ;">
                                    {{ $category->name }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <x-alert type="warning" message="دسته بندی یافت نشد" />
            @endforelse


        </div>

    </div>
</div>
