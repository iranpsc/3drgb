<div>
    <div class="flex flex-col justify-center items-center">
        <div class=" xl:px-20 ">
            <div class="row justify-content-center">
                <div>
                    <div>
                        <div class=" flex items-center justify-between gap-3 ">
                            <div class="step current flex flex-col gap-2  items-center mt-5" id="1">
                                <span
                                    class="bg-[#06CC85] rounded-full text-white flex items-center justify-center w-12 aspect-square p-2">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 457.57">
                                        <path fill="white" storke="white"
                                            d="M0,220.57c100.43-1.33,121-5.2,191.79,81.5,54.29-90,114.62-167.9,179.92-235.86C436-.72,436.5-.89,512,.24,383.54,143,278.71,295.74,194.87,457.57,150,361.45,87.33,280.53,0,220.57Z" />
                                    </svg>
                                </span>
                                <span>سبد خرید</span>
                            </div>
                            <div class="current hidden lg:block w-full"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img"
                                    class="w-full"></div>
                            <div class="step flex flex-col gap-2  items-center mt-5" id="2">
                                <span
                                    class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">2</span>
                                <span>ایجاد حساب</span>
                            </div>
                            <div class="current hidden lg:block w-full"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img"
                                    class="w-full"></div>
                            <div class="step flex flex-col gap-2  items-center mt-5" id="3">
                                <span
                                    class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">
                                    3</span>
                                <span>پرداخت</span>
                            </div>
                            <div class="current hidden lg:block w-full"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img"
                                    class="w-full"></div>
                            <div class="step flex flex-col gap-2  items-center mt-5" id="4">
                                <span
                                    class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">4</span>
                                <span>جزئیات پرداخت</span>
                            </div>
                        </div>
                    </div><!-- checkout -->
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                                <div class="card-body">
                                    <div class="flex flex-col md:flex-row gap-5 items-center mt-10 justify-center">
                                        <div class="flex flex-col gap-3 items-center justify-center">
                                            <h6>اگر قبلا حساب کاربری ایجاد کرده اید، لطفا وارد شوید</h6>
                                            <x-button color="light" size="sm" wire:click="login">ورود</x-button>
                                        </div>
                                        <div class="flex flex-col gap-3 items-center justify-center">
                                            <h6 class="mb-0">اگر قبلا حساب کاربری ایجاد نکرده اید، ثبت نام کنید</h6>
                                            <x-button color="light" size="sm" wire:click="register">ثبت
                                                نام</x-button>
                                        </div>
                                    </div>
                                    <div class="edit-profile__body">
                                        {{-- @if ($hasAccount)
                                 <form wire:submit="login">
                                    <x-form.text wire:model="email" name="email" label="ایمیل"  type="email" />
                                    <x-form.text wire:model="password" name="password" label="رمز عبور" type="password" />

                                    <div class="flex flex-col md:flex-row gap-5 items-center mt-10">
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
                                    
                                    <div class="flex flex-col md:flex-row gap-5 items-center mt-10 ">
                                       <div class="">
                                          <a href="{{ route('cart') }}" class="text-white  mt-16 active:scale-105  bg-[#000BEE] dark:bg-[#C2008C] py-3 rounded-[10px]">بازگشت</a>
                                       </div>
                                       <div class="">
                                          <x-button type="submit" class="text-white  mt-16 active:scale-105  bg-[#000BEE] dark:bg-[#C2008C] py-3 rounded-[10px]">ثبت نام</x-button>
                                       </div>
                                    </div>
                                 </form>
                              @endif --}}
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
