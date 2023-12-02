@props(['product' => null])

<div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
    <div class="card product product--grid">
       <div class="h-100">
          <div class="product-item">
             <div class="product-item__image">
                <span class="like-icon">
                   <button type="button" class="content-center">
                      <i class="lar la-heart icon"></i>
                   </button>
                </span>
                <a href="{{ route('products.show', $product->name) }}"><img class="card-img-top img-fluid" src="{{ $product->images->first()->url }}" alt="digital-chair"></a>
             </div>
             <div class="card-body px-20 pb-25 pt-25">
                <div class="product-item__body text-capitalize">
                   <a href="{{ route('products.show', $product->name) }}">
                      <h6 class="card-title">{{ $product->name }}</h6>
                   </a>
                   <div class="stars-rating d-flex align-items-center flex-wrap mb-10">
                      <span class="star-icon las la-star active"></span>
                      <span class="star-icon las la-star active"></span>
                      <span class="star-icon las la-star active"></span>
                      <span class="star-icon las la-star active"></span>
                      <span class="star-icon las la-star-half-alt active"></span>
                      <span class="stars-rating__point">4.9</span>
                      <span class="stars-rating__review">
                         <span>0</span> نقد</span>
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
                   <button type="button" @disabled(session('cart') && in_array($product->id, session('cart'))) wire:click="addToCart({{ $product->id }})" class="btn btn-default btn-squared color-light btn-outline-light"><img src="{{ asset('img/svg/shopping-bag.svg') }}" alt="shopping-bag" class="svg">
                     افزودن به سبد خرید
                  </button>
                  <button type="button" wire:click="purchase({{ $product->id }})" class="btn btn-primary btn-default btn-squared border-0">خرید</button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>