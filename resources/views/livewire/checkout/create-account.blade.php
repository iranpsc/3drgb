<div>
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
                     <div class="step current" id="2">
                        <span>2</span>
                        <span>ایجاد حساب</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                     <div class="step" id="3">
                        <span>3</span>
                        <span>پرداخت</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                     <div class="step" id="4">
                        <span>4</span>
                        <span>جزئیات پرداخت</span>
                     </div>
                  </div>
               </div><!-- checkout -->
               <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-8 col-sm-10">
                     <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                        <div class="card-body">
                           <div class="d-flex justify-content-between align-items-center flex-wrap mb-30">
                              <h6 class="mb-0">اگر قبلا حساب کاربری ایجاد کرده اید، لطفا وارد شوید</h6>
                              <x-button color="light" size="sm" wire:click="toggleHasAccount">ورود</x-button>
                           </div>
                           <div class="edit-profile__body">
                              @if ($hasAccount)
                                 <form wire:submit="login">
                                    <x-form.text wire:model="email" name="email" label="ایمیل"  type="email" />
                                    <x-form.text wire:model="password" name="password" label="رمز عبور" type="password" />

                                    <div class="row">
                                       <div class="col-6">
                                          <a href="{{ route('cart') }}" class="btn btn-outline-light btn-sm">بازگشت</a>
                                       </div>
                                       <div class="col-6 d-flex justify-content-end">
                                          <x-button type="submit">ورود</x-button>
                                       </div>
                                    </div>

                                 </form>
                              @else
                                 <form wire:submit="createAccount">
                                    <x-form.text wire:model="name" name="name" label="نام و نام خانوادگی" />
                                    <x-form.text type="email" wire:model="email" name="email" label="ایمیل" />
                                    <x-form.text wire:model="password" name="password" label="رمز عبور" type="password" />
                                    <x-form.text wire:model="password_confirmation" name="password_confirmation" label="تکرار رمز عبور" type="password" />
                                    
                                    <div class="row">
                                       <div class="col-6">
                                          <a href="{{ route('cart') }}" class="btn btn-outline-light btn-sm">بازگشت</a>
                                       </div>
                                       <div class="col-6 d-flex justify-content-end">
                                          <x-button type="submit">ثبت نام</x-button>
                                       </div>
                                    </div>
                                 </form>
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
</div>
