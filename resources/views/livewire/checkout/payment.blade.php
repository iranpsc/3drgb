<div>
    <div class="container-fluid">
        <div class=" checkout wizard1 global-shadow border-0 px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-12">
                    <div class="checkout-progress-indicator content-center">
                        <div class="checkout-progress">
                            <div class="step completed" id="1">
                                <span class="las la-check"></span>
                                <span>سبد خرید</span>
                            </div>
                            <div class="current"><img src="img/svg/green.svg" alt="img" class="svg"></div>
                            <div class="step completed" id="2">
                                <span class="las la-check"></span>
                                <span>ایجاد حساب</span>
                            </div>
                            <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                            <div class="step current" id="3">
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
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-12">
                            <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                       @if (session()->has('error'))
                                          <x-alert type="danger" :message="session('error')" />
                                       @endif
                                       @if (session()->has('success'))
                                          <x-alert type="success" :message="session('success')" />
                                       @endif
                                        <div class="payment-invoice-table">
                                            <div class="table-responsive">
                                               <table id="cart" class="table table-borderless">
                                                  <thead>
                                                     <tr class="product-cart__header">
                                                        <th scope="col">#</th>
                                                        <th scope="col">محصول</th>
                                                        <th scope="col" class="text-end">قیمت هر واحد</th>
                                                        <th scope="col" class="text-end">تعداد</th>
                                                        <th scope="col" class="text-end">مجموع سفارش</th>
                                                     </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach ($products as $product)
                                                         <tr>
                                                            <th>{{ $loop->iteration }}</th>
                                                            <td class="Product-cart-title">
                                                               <div class="media  align-items-center">
                                                                  <div class="media-body">
                                                                     <h5 class="mt-0">{{ $product->name }}</h5>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td class="unit text-end">{{ $product->final_price }}  تومان</td>
                                                            <td class="invoice-quantity text-end">1</td>
                                                            <td class="text-end order">{{ $product->final_price }}  تومان</td>
                                                         </tr>
                                                      @endforeach
                                                  </tbody>
                                                  <tfoot>
                                                     <tr>
                                                        <td colspan="3"></td>
                                                        <td class="order-summery float-right border-0">
                                                           <div class="total-money mt-2 text-end">
                                                              <h6>مجموع :</h6>
                                                           </div>
                                                        </td>
                 
                                                        <td>
                                                           <div class="total-order float-right text-end fs-14 fw-500">
                                                              <h5 class="text-primary">{{ $products->sum('final_price') }} تومان</h5>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tfoot>
                                               </table>
                                            </div>
                                            <hr>
                                            <x-button wire:click="pay">پرداخت</x-button>
                                         </div><!-- End: .payment-invoice-table -->
                                    </div>
                                </div>
                            </div><!-- ends: card -->
                        </div><!-- ends: col -->
                    </div>
                </div><!-- ends: col -->
            </div>
        </div><!-- End: .global-shadow-->
        </div>
</div>
