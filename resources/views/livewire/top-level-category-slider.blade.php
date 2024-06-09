<div class="swiper-slide flex w-full mt-10">
    @forelse ($categories as $category)
        <div class="w-full" wire:key="popular-category-{{ $category->id }}">
            <a href="{{ route('categories.show', ['category_link' => $category->url]) }}"
                class="w-full bg-white dark:bg-[#001448] flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-5 gap-16">
                <div class=" aspect-square" style="width: 90%">
                    <img src="{{ asset($category->image?->url) }}" loading="lazy" alt="category" class="w-full">
                </div>
                <div class="flex flex-col justify-end ">
                    <p class="text-[#000BEE]  dark:text-[#E8E9FF] text-3xl font-bold p-0 mt-2"
                        style="font-family:rokh ;">
                        {{ $category->name }}
                    </p>
                </div>
            </a>
        </div>
    @empty
        <x-alert type="warning" message="دسته بندی یافت نشد" />
    @endforelse
</div>
