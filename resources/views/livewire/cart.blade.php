<div>
    <x-page title="سبد خرید">

        @if(session()->has('message'))
            <x-alert type="success" message="{{ session('message') }}" />
        @endif

        <div class="container-fluid">
            <div class="checkout wizard1 global-shadow border-0 px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
               <div class="row justify-content-center">
                  <div class="col-xl-10 col-12">
                    @if(count($cart) > 0)
                        <div class="checkout-progress-indicator content-center">
                            <div class="checkout-progress">
                                <div class="step current" id="1">
                                    <span>1</span>
                                    <span>سبد خرید</span>
                                </div>
                                <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                                <div class="step" id="2">
                                    <span>2</span>
                                    <span>ایجاد حساب</span>
                                </div>
                                <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                                <div class="step" id="3">
                                    <span>3</span>
                                    <span>پرداخت</span>
                                </div>
                                <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                                <div class="step" id="4">
                                    <span>4</span>
                                    <span>جزئیات پرداخت</span>
                                </div>
                            </div>
                        </div><!-- checkout -->
                    @endif
                     <div class="row justify-content-center mt-5">
                        <div class="col-12">
                            @if (count($cart) > 0)
                                <div class="cartPage global-shadow pe-sm-30 ps-sm-30 py-sm-30 radius-xl w-100 mb-30">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-7 col-12">
                                            <div class="product-cart mb-sm-0 mb-20">
                                                <div class="table-responsive">
                                                    <table id="cart" class="table table-borderless table-hover">
                                                    <thead>
                                                        <tr class="product-cart__header">
                                                            <th scope="col">محصول</th>
                                                            <th scope="col">قیمت</th>
                                                            <th scope="col" class="text-center">مجموع</th>
                                                            <th scope="col" class="">عملیات</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $product)
                                                            <tr>
                                                                <td class="Product-cart-title">
                                                                    <div class="media  align-items-center">
                                                                        <img class="me-3 wh-80 align-self-center radius-xl" src="{{ asset('storage/' . $product->images->first()->path) }}" alt="Generic placeholder image">
                                                                        <div class="media-body">
                                                                            <h5 class="mt-0">{{ $product->name }}</h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="price">{{ number_format($product->final_price, 0) }} تومان</td>
                                                                <td class="text-center subtotal">{{ number_format($product->final_price, 0) }} تومان</td>
                                                                <td class="actions">
                                                                    <button type="button" class="action-btn float-end" wire:click="removeFromCart({{ $product->id }})">
                                                                    <i class="las la-trash-alt"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    </table><!-- End: table -->
                                                </div>
                                            </div><!-- End: .product-cart-->
                                        </div><!-- End: .cus-xl-9 -->
                                        <div class="col-xl-5 col-12">
                                            <div class="card order-summery p-sm-25 p-15 order-summery--width mt-lg-0 mt-20">
                                                <div class="card-header border-bottom-0 p-0 pb-25">
                                                    <h5 class="fw-500">خلاصه سفارش</h5>
                                                </div>
                                                <div class="card-body px-sm-25 px-20">
                                                    <div class="total">
                                                        <div class="subtotalTotal">
                                                            جمع فرعی:
                                                            <span>{{ number_format($products->sum('final_price'), 0) }} تومان</span>
                                                        </div>
                                                        <div class="taxes">
                                                            تخفیف:
                                                            <span>0</span>
                                                        </div>
                                                    </div>
                                                    <div class="total-money d-flex justify-content-between">
                                                        <h6>مجموع :</h6>
                                                        <h5>{{ number_format($products->sum('final_price'), 0) }} تومان</h5>
                                                    </div>
                                                    <button type="button" wire:click="checkout" class="checkout btn-secondary content-center w-100 btn-lg mt-20">تسویه حساب<i class="las la-arrow-left"></i></button>
                                                </div>
                                            </div><!-- End: .order-summery-->
                                        </div><!-- End: .cus-xl-9 -->
                                    </div>
                                </div><!-- End: .global-shadow -->
                            @else
                                <x-alert type="warning" message="سبد خرید شما خالی است." />
                            @endif
                        </div><!-- ends: col -->
                     </div>
                  </div><!-- ends: col -->
               </div>
            </div><!-- End: .global-shadow-->
         </div>
    </x-page>
</div>
