<div>
    <div class="">
        <div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-12">
                    <div>
                        <div class="  flex items-center justify-between gap-3 ">
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
                            <div class="current hidden lg:block w-full"><img src="{{ asset('img/svg/green.svg') }}"
                                    alt="img" class="w-full"></div>
                            <div class="step flex flex-col gap-2  items-center mt-5" id="2">
                                <span
                                    class="bg-[#06CC85] rounded-full text-white flex items-center justify-center w-12 aspect-square p-2">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 457.57">
                                        <path fill="white" storke="white"
                                            d="M0,220.57c100.43-1.33,121-5.2,191.79,81.5,54.29-90,114.62-167.9,179.92-235.86C436-.72,436.5-.89,512,.24,383.54,143,278.71,295.74,194.87,457.57,150,361.45,87.33,280.53,0,220.57Z" />
                                    </svg>
                                </span>
                                <span>ایجاد حساب</span>
                            </div>
                            <div class="current hidden lg:block w-full"><img src="{{ asset('img/svg/checkout.svg') }}"
                                    alt="img" class="w-full"></div>
                            <div class="step flex flex-col gap-2  items-center mt-5" id="3">
                                <span
                                    class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">
                                    3</span>
                                <span>پرداخت</span>
                            </div>
                            <div class="current hidden lg:block w-full"><img src="{{ asset('img/svg/checkout.svg') }}"
                                    alt="img" class="w-full"></div>
                            <div class="step flex flex-col gap-2  items-center mt-5" id="4">
                                <span
                                    class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">4</span>
                                <span>جزئیات پرداخت</span>
                            </div>
                        </div>
                    </div><!-- checkout -->
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-12">
                            <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                                <div class="card-body">
                                    <div class="edit-profile__body">

                                        @session('error')
                                            <x-alert type="danger" :message="session('error')" />
                                        @endsession

                                        @session('success')
                                            <x-alert type="success" :message="session('success')" />
                                        @endsession

                                        <div class="w-full mt-10">
                                            <div class="w-full overflow-x-auto">
                                                <table id="cart"
                                                    class="w-max lg:w-full flex flex-col gap-10 text-sm ">
                                                    <thead
                                                        class="w-full bg-[#EFEFEF] dark:bg-[#1A1A18] rounded-[10px] py-3 px-5 ">
                                                        <tr class="flex  lg:gap-0 w-full justify-between text-right">
                                                            <th style="width:20%">#</th>
                                                            <th style="width:20%">محصول</th>
                                                            <th style="width:20%">قیمت هر واحد</th>
                                                            <th style="width:20%">تعداد</th>
                                                            <th style="width:20%">مجموع سفارش</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class=" px-5 flex flex-col gap-5">
                                                        @php
                                                            $total_price = 0;
                                                        @endphp
                                                        @foreach ($products as $product)
                                                            <tr wire:key="{{ $product->id }}"
                                                                class=" w-full justify-between flex items-center gap-10 lg:gap-0 text-right">
                                                                @php
                                                                    $cart_item = collect($cart_items)
                                                                        ->where('product_id', $product->id)
                                                                        ->first();
                                                                    $quantity = $cart_item['quantity'];
                                                                    $total_price += $product->final_price * $quantity;
                                                                @endphp
                                                                <th style="width:20%">{{ $loop->iteration }}</th>
                                                                <td style="width:20%">{{ $product->name }} </td>
                                                                <td style="width:20%">{{ number_format($product->final_price, 0) }} تومان
                                                                </td>
                                                                <td style="width:20%">{{ $quantity }}</td>
                                                                <td style="width:20%">{{ number_format($product->final_price * $quantity, 0) }} تومان
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="flex gap-10 justify-end items-center my-5 text-xl">
                                                            <td colspan="3"></td>
                                                            <td class="order-summery float-right border-0">
                                                                <div>
                                                                    <h6>مجموع :</h6>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div
                                                                    class="total-order float-right text-end fs-14 fw-500">
                                                                    <h5 class="text-primary">
                                                                        {{ number_format($total_price, 0) }} تومان</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="flex gap-5 my-5 justify-center items-center w-full">
                                                <div class="">
                                                    <x-button wire:click="goBack" style="background-color:#E59819">بازگشت</x-button>
                                                </div>
                                                <div class="">
                                                    <x-button 
                                                        wire:click="pay">پرداخت</x-button>
                                                </div>
                                            </div>
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
