<div>
    <x-page title="نتیجه پرداخت">
        <div class="container-fluid">
            <div class=" checkout wizard1 global-shadow border-0 px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
               <div class="row justify-content-center">
                  <div class="col-xl-8 col-12">
                     <div class="checkout-progress-indicator content-center">
                        <div class="checkout-progress">
                           <div class="step completed" id="1">
                              <span class="las la-check"></span>
                              <span>سبد خرید</span>
                           </div>
                           <div class="current"><img src="{{ asset('img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                           <div class="step completed" id="2">
                              <span class="las la-check"></span>
                              <span>ایجاد حساب</span>
                           </div>
                           <div class="current"><img src="{{ asset('img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                           <div class="step completed" id="3">
                              <span class="las la-check"></span>
                              <span>پرداخت</span>
                           </div>
                           <div class="current"><img src="{{ asset('img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                           <div class="step completed" id="4">
                              <span class="las la-check"></span>
                              <span>جزئیات پرداخت</span>
                           </div>
                        </div>
                     </div><!-- checkout -->
                     <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                           <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                              <div class="card-body">
                                 <div class="edit-profile__body">
                                    @if (session()->has('error'))
                                        <x-alert type="danger" :message="session('error')" />
                                    @endif

                                    @if($order && $order->status == 'OK')
                                        <div class="alert alert-success my-2">
                                            <p>پرداخت شما با موفقیت انجام شد. کد پیگیری پرداخت: {{ $transaction->reference_id }}</p>
                                        </div>

                                        <div class="alert alert-success">
                                           <p>جهت دانلود فایل به بخش <a href="{{ route('user.orders') }}">سفارشات</a> مراجعه کنید.</p>
                                        </div>
                                    @endif
                                 </div>
                              </div>
                           </div><!-- ends: card -->
                        </div><!-- ends: col -->
                     </div>
                  </div><!-- ends: col -->
               </div>
            </div><!-- End: .global-shadow-->
         </div>
    </x-page>
</div>
