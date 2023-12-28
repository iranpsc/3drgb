<div>
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="shop-breadcrumb">
                 <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">جزئیات محصول</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                       <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>خانه</a></li>
                             <li class="breadcrumb-item active" aria-current="page">جزئیات محصول</li>
                          </ol>
                       </nav>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="products mb-30">
        <div class="container-fluid">
           <!-- Start: Card -->
           <div class="card product-details h-100 border-0">

               @session('message')
                  <x-alert type="success" message="{{ session('message') }}" />
               @endsession

               <div class="row product-item d-flex p-sm-50 p-20">
                  <div class="col-lg-5">
                     <!-- Start: Product Slider -->
                     <div class="product-item__image">
                        <div class="wrap-gallery-article carousel slide carousel-fade" id="carouselExampleCaptions" data-bs-ride="carousel">
                           <div>
                              <div class="carousel-inner">
                                  @foreach ($product->images as $image)
                                      <div class="carousel-item @if($loop->iteration == 1) active @endif">
                                          <img class="img-fluid d-flex bg-opacity-primary " src="{{ asset('storage/' . $image->path) }}" alt="Card image cap" title="">
                                      </div>
                                  @endforeach
                              </div>
                           </div>
                           <div class="overflow-hidden">
                              <!-- Bottom switcher of slider -->
                              <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">
                                  @foreach ($product->images as $image)
                                      <li>
                                          <a href="#" class="thumbnail @if($loop->iteration == 1) active @endif" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->iteration }}" aria-current="true" aria-label="Slide 1">
                                              <img class="img-fluid d-flex" src="{{ asset('storage/' . $image->path) }}" alt="">
                                          </a>
                                      </li>
                                  @endforeach
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- End: Product Slider -->
                  </div>
                  <div class="col-lg-7">
                     <!-- Start: Product Details -->
                     <div class="b-normal-b mb-25 pb-sm-35 pb-15 mt-lg-0 mt-15">
                        <div class="product-item__body">
                           <!-- Start: Product Title -->
                           <div class="product-item__title">
                              <a href="javascript::void(0)">
                                 <h1 class="card-title">{{ $product->name }}</h1>
                              </a>
                           </div>
                           <!-- End: Product Title -->
                           <div class="product-item__content text-capitalize">
                              <!-- Start: Product Ratings -->
                              <div class="stars-rating d-flex align-items-center">
                                 <span class="star-icon las la-star active"></span>
                                 <span class="star-icon las la-star active"></span>
                                 <span class="star-icon las la-star active"></span>
                                 <span class="star-icon las la-star active"></span>
                                 <span class="star-icon las la-star-half-alt active"></span>
                                 <span class="stars-rating__point">4.9</span>
                                 <span class="stars-rating__review">
                                    <span>0</span> نقد</span>
                              </div>
                              
                              <!-- End: Product Ratings -->
                              <span class="product-desc-price">{{ $product->price }}<sub>تومان</sub></span>
                              @if ($product->sale_price)
                                  <span class="product-price">{{ $product->sale_price }}<sub>تومان</sub></span>
                                  <span class="product-discount">%{{ $product->discount }} تخفیف</span>
                              @endif
                              <!-- End: Product Brand -->
                              <!-- Start: Product Description -->
                              <p class=" product-deatils-pera">{{ $product->short_description }}</p>
                              <!-- End: Product Description -->

                              <!-- Start: Product Stock -->
                              <div class="product-details__availability">
                                 <div class="title">
                                    <p>شناسه:</p>
                                    <span class="free">{{ $product->sku}}</span>
                                 </div>
                                 <div class="title">
                                    <p>موجودی:</p>
                                    <span class="stock">{{ $product->stock_status ? 'در انبار' : 'ناموجود' }}</span>
                                 </div>
                                 <div class="title">
                                    <p>تعداد:</p>
                                    <span class="free">{{ $product->quantity }}</span>
                                 </div>
                              </div>
                              <!-- End: Product Stock -->
                              <!-- Start: Product Quantity -->
                              <div class="quantity product-quantity flex-wrap">
                                 <div class="me-15 d-flex align-items-center flex-wrap">
                                    <p class="fs-14 fw-500 color-dark">تعداد:</p>
                                    <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                    <input type="number" value="1" class="qty qh-36 input">
                                    <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                 </div>
                                 <span class="fs-13 fw-400 color-light my-sm-0 my-10">تعداد موجود {{ $product->quantity }}</span>
                              </div>
                              <!-- End: Product Quantity -->
                              <!-- Start: Product Selections -->
                              <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                 <div class=" d-flex flex-wrap product-item__action align-items-center">
                                    @if(Auth::check() && Auth::user()->hasPurchased($product))
                                        <x-button wire:click="download" color="info" size="block"><img src="{{ asset('img/svg/download.svg') }}" alt="download" class="svg">
                                            دانلود
                                        </x-button>
                                    @else
                                       <button type="button" @disabled(session('cart') && in_array($product->id, session('cart'))) wire:click="addToCart" class="btn btn-light text-dark btn-squared border-0 me-10 my-sm-0 my-2">
                                          افزودن به سبد خرید
                                       </button>
                                       <button type="button" wire:click="purchase" class="btn btn-primary btn-default btn-squared border-0 me-10 my-sm-0 my-2">خرید و دانلود</button>
                                    @endif
                                    <div class="like-icon">
                                       <button type="button">
                                          <i class="lar la-heart icon"></i>
                                       </button>
                                    </div>
                                 </div>
                              </div>
                              <!-- End: Product Selections -->
                           </div>
                        </div>
                     </div>
                     <!-- Start: Product Availability -->
                     <div class="product-details__availability">
                        <div class="title">
                           <p>دسته بندی</p>
                           <span class="free">{{ $product->category->name }}</span>
                        </div>
                        <div class="title">
                           <p>برچسب ها</p>
                           <span class="free">{{ implode(',', $product->tags->pluck('name')->toArray()) }}</span>
                        </div>
                     </div>
                     <!-- End: Product Availability -->
                    </div>
                </div>
                <!-- End: Product Details -->
                <div class="tab-wrapper px-5">
                 <div class="dm-tab tab-horizontal">
                    <ul class="nav nav-tabs vertical-tabs" role="tablist">
                       <li class="nav-item">
                          <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">معرفی</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">مشخصات</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" id="tab-v-3-tab" data-bs-toggle="tab" href="#tab-v-3" role="tab" aria-selected="false">دیدگاه ها</a>
                       </li>
                    </ul>
                    <div class="tab-content py-2">
                       <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                          <p>{!! $product->long_description !!}</p>
                       </div>
                       <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                            @foreach ($product->attributes as $attribute)
                                <div class="product-details__availability my-2" wire:key="{{ $attribute->id }}">
                                    <div class="title">
                                        <p>{{ $attribute->name }}</p>
                                        <span class="free">{{ $attribute->pivot->value }}</span>
                                    </div>
                                </div>
                            @endforeach
                       </div>
                       <div class="tab-pane fade" id="tab-v-3" role="tabpanel" aria-labelledby="tab-v-3-tab">
                           <livewire:reviews :product="$product" />
                       </div>
                    </div>
                 </div>
                </div>
           </div>
           <!-- End: Card -->
        </div>
     </div>

   </div>