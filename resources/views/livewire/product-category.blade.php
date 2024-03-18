<div>
    <main>
        <div class="max-w-[1500px] mx-auto  lg:p-9 mt-24 lg:mt-14 flex flex-col lg:flex-row gap-5  px-5">
            <div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-5 transition-[5s] duration-500 ">
                @forelse ($category->children as $child)
                    @php
                        $children_links = implode('/', array_merge($category_link, [$child->slug]));
                    @endphp
                    <div class=" product">
                        <div
                            class="bg-white dark:bg-[#001448] w-full flex flex-col overflow-hidden rounded-xl justify-between items-center text-center p-3 gap-2  duration-500 transition-all">
                            <a href="{{ route('product-categories', ['category_link' => $children_links]) }}"
                                class="p-3 w-full ">
                                <img
                                    src="{{ $child->image->url ?? asset('home-page/images/3d-Strawberry-3dmodel.jpg') }}">
                            </a>
                            <div class="w-full flex flex-col justify-center items-center gap-3">
                                <a href="{{ route('product-categories', ['category_link' => $children_links]) }}"
                                    class="font-bold text-sm lg:text-xl text-stone-800 dark:text-white py-5">{{ $child->name }}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full flex justify-center items-center">
                        <p class="text-2xl font-bold text-stone-800 dark:text-white">No Products Found</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
</div>
