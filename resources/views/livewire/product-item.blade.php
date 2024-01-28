<div class="col-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
    <div class="card product product--grid">
        <div class="h-100">
            <div class="product-item">
                <div class="product-item__image">
                    <span class="like-icon">
                    <button type="button" class="content-center">
                        <i class="lar la-heart icon"></i>
                    </button>
                    </span>
                    <a href="{{ $product->url }}"><img class="card-img-top img-fluid" src="{{ $product->images->first()->url }}" alt="digital-chair"></a>
                </div>
                <div class="card-body px-20 pb-25 pt-25">
                    <div class="product-item__body text-capitalize">
                        <a href="{{ $product->url }}">
                            <h6 class="card-title">{{ $product->name }}</h6>
                        </a>
                        <div class="stars-rating d-flex align-items-center flex-wrap mb-10">
                            @php
                                $rating = round($product->rating_avg * 2) / 2; // Round to the nearest 0.5
                                $fullStars = floor($rating);
                                $halfStar = ($rating - $fullStars) >= 0.5 ? true : false;
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                            @endphp

                            @if($fullStars > 0)
                                @foreach(range(1, $fullStars) as $i)
                                    <span class="star-icon las la-star active"></span>
                                @endforeach
                            @endif

                            @if($halfStar)
                                <span class="star-icon las la-star-half-alt active"></span>
                            @endif

                            @if($emptyStars > 0)
                                @foreach(range(1, $emptyStars) as $i)
                                    <span class="star-icon las la-star"></span>
                                @endforeach
                            @endif

                            <span class="stars-rating__point">{{ number_format($product->rating_avg) }} امتیاز</span>
                            <span class="stars-rating__review">
                                <span>{{ $product->reviews_count }}</span> نقد
                            </span>
                        </div>
                    </div>
                    <div class="product-item__footer">
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="product-desc-price">{{ number_format($product->final_price, 0) }} تومان</span>

                            @if ($product->sale_price)
                                <span class="product-price">{{ $product->price }} تومان</span>
                                <span class="product-discount">%{{ $product->discount }} تخفیف</span>
                            @endif
                        </div>
                    </div>
                    <div class="product-item__button d-flex mt-20 flex-wrap">
                    @if (Auth::check() && Auth::user()->hasPurchased($product))
                        <x-button wire:click="download({{ $product->id }})" color="light" size="block"><img src="{{ asset('img/svg/download.svg') }}" alt="download" class="svg">
                        دانلود
                        </x-button>
                    @else
                        <button type="button" @disabled(session('cart') && in_array($product->id, session('cart'))) wire:click="addToCart({{ $product->id }})" class="btn btn-default btn-squared color-light btn-outline-light px-2"><img src="{{ asset('img/svg/shopping-bag.svg') }}" alt="shopping-bag" class="svg">
                            افزودن به سبد خرید
                        </button>
                        <button type="button" wire:click="purchase({{ $product->id }})" class="btn btn-primary btn-default btn-squared border-0 mr-auto">خرید</button>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>