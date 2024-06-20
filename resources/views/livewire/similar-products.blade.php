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
