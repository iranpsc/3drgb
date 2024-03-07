<div>
        <x-page title="سبد خرید">
    
            @session('message')
                <x-alert type="success" message="{{ session('message') }}" />
            @endsession
    
            <div class="container-fluid">
                <div class="checkout wizard1 global-shadow border-0 px-sm-50 xl:px-20 pt-sm-50 py-30 mb-30  radius-xl w-100">
                   <div class="row justify-content-center">
                      <div class="col-xl-10 col-12">
                        @if(count($cart) > 0)
                            <div>
                                <div class=" flex items-center gap-3">
                                    <div class="step current flex flex-col gap-2  items-center mt-5" id="1">
                                    <span class="bg-[#06CC85] rounded-full text-white flex items-center justify-center w-12 aspect-square p-2">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 457.57"><path fill="white" storke="white" d="M0,220.57c100.43-1.33,121-5.2,191.79,81.5,54.29-90,114.62-167.9,179.92-235.86C436-.72,436.5-.89,512,.24,383.54,143,278.71,295.74,194.87,457.57,150,361.45,87.33,280.53,0,220.57Z"/></svg>
                                    </span>
                                        <span>سبد خرید</span>
                                    </div>
                                    <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                                    <div class="step flex flex-col gap-2  items-center mt-5" id="2">
                                        <span class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">2</span>
                                        <span>ایجاد حساب</span>
                                    </div>
                                    <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                                    <div class="step flex flex-col gap-2  items-center mt-5" id="3">
                                        <span  class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12"> 3</span>
                                        <span>پرداخت</span>
                                    </div>
                                    <div class="current"><img src="img/svg/checkout.svg" alt="img" class="svg"></div>
                                    <div class="step flex flex-col gap-2  items-center mt-5" id="4">
                                        <span  class="flex justify-center items-center bg-[#EFEFEF] dark:bg-[#4A4E7C] aspect-square rounded-full w-12">4</span>
                                        <span>جزئیات پرداخت</span>
                                    </div>
                                </div>
                            </div><!-- checkout -->
                        @endif
                         <div class="row justify-content-center mt-10">
                            <div class="col-12">
                                @if (count($cart) > 0)
                                    <div class="">
                                        <div class="flex flex-col lg:flex-row w-full gap-10">                     
                                                    <div class="w-full lg:w-[70%] overflow-x-auto">
                                                        <table id="cart" class=" lg:w-full flex flex-col gap-10">
                                                        <thead class="w-max lg:w-full bg-[#EFEFEF] dark:bg-[#4A4E7C] rounded-[10px] py-3 px-5">
                                                            <tr class="flex  w-full space-x-10 lg:space-x-0 justify-between">
                                                                <th class="lg:w-[40%] w-[160px] text-right" >محصول</th>
                                                                <th >قیمت</th>
                                                                <th  >مجموع</th>
                                                                <th >عملیات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class=" lg:px-5 flex flex-col gap-5">
                                                            @foreach ($products as $product)
                                                                <tr class=" w-full justify-between flex items-center gap-10 lg:gap-0">
                                                                    <td class="lg:w-[40%]">
                                                                        <div class="flex gap-3 items-center w-full">
                                                                            <img class=" aspect-square w-[80px] h-[80px] rounded-[10px]" src="{{ asset('storage/' . $product->images->first()->path) }}" alt="Generic placeholder image">
                                                                            <div class="media-body">
                                                                                <h5 class="mt-0">{{ $product->name }}</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td >{{ number_format($product->final_price, 0) }} تومان</td>
                                                                    <td >{{ number_format($product->final_price, 0) }} تومان</td>
                                                                    <td >
                                                                        <button type="button" class="action-btn float-end rounded-full p-2" wire:click="removeFromCart({{ $product->id }})"> 
                                                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="35px" height="35px"><path class="dark:fill-white" d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"/></svg>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        </table><!-- End: table -->
                                                    </div>
      
                                            <div class="w-full lg:w-[30%] bg-[#EFEFEF] dark:bg-[#4A4E7C] rounded-[10px] p-5   ">
                                                <div class="flex flex-col gap-10  mt-20">
                                                    <div class="card-header border-bottom-0 p-0 pb-25">
                                                        <h5 class="fw-500">خلاصه سفارش</h5>
                                                    </div>
                                                    <div class="bg-white dark:bg-[#9A9ECC] rounded-[10px] p-5 flex flex-col gap-3">
                                                        <div class=" flex flex-col gap-3">
                                                            <div class="flex items-center justify-between">
                                                                <span>جمع فرعی:</span>
                                                                <span>{{ number_format($products->sum('final_price'), 0) }} تومان</span>
                                                            </div>
                                                            <div class="flex items-center justify-between">
                                                                <span>
                                                                تخفیف:
                                                                </span>
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center justify-between ">
                                                            <h6 style="color:blue">مجموع :</h6>
                                                            <h5 style="color:blue">{{ number_format($products->sum('final_price'), 0) }} تومان</h5>
                                                        </div>
                                                        <button type="button" wire:click="checkout" class="checkout text-white  mt-16 active:scale-105  bg-[#000BEE] dark:bg-[#C2008C] py-3 rounded-[10px]">تسویه حساب<i class="las la-arrow-left"></i></button>
                                                    </div>
                                                </div><!-- End: .order-summery-->
                                            </div><!-- End: .cus-xl-9 -->
                                        </div>
                                    </div><!-- End: .global-shadow -->
                                @else
                                    <x-empty-page />
                                @endif
                            </div><!-- ends: col -->
                         </div>
                      </div><!-- ends: col -->
                   </div>
                </div><!-- End: .global-shadow-->
             </div>
        </x-page>
    </div>