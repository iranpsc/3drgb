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
                        <div class="col-12">
                           <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                              <div class="card-body">
                                 <div class="edit-profile__body">
                                    @if (session()->has('error'))
                                        <x-alert type="danger" :message="session('error')" />
                                    @endif

                                    @if($order && $order->isPaid())
                                        <div class="alert alert-success my-2">
                                            <p>پرداخت شما با موفقیت انجام شد. کد پیگیری پرداخت: {{ $transaction->reference_id }}</p>
                                        </div>

                                        <div class="userDatatable orderDatatable shipped-dataTable global-shadow border-0 p-30 bg-white radius-xl w-100 mb-30">
                                          <div class="table-responsive">
                                             <table class="table mb-0 table-borderless border-0">
                                                <thead>
                                                   <tr class="userDatatable-header">
                                                      <th>
                                                         ردیف
                                                      </th>
                                                      <th>
                                                         <span class="userDatatable-title">شناسه سفارش</span>
                                                      </th>
                                                      <th>
                                                         <span class="userDatatable-title">نام محصول</span>
                                                      </th>
                                                      <th>
                                                          <span class="userDatatable-title">مبلغ پرداختی</span>
                                                      </th>
                                                      <th>
                                                         <span class="userDatatable-title float-end">دانلود</span>
                                                      </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($order->products as $product)
                                                      <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                               <div class="orderDatatable-title">
                                                                  {{ $order->tracking_id }}
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="orderDatatable-title">
                                                                  {{ $product->name }}
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="orderDatatable-title">
                                                                  {{ $product->price }}
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <x-button wire:click="download({{ $product->id }})"><i class="uil uil-download-alt"></i>دانلود</x-button>
                                                            </td>
                                                      </tr>
                                                   @endforeach
                                                   <!-- End: tr -->
                                                </tbody>
                                             </table><!-- End: table -->
                                          </div>
                                       </div><!-- End: .userDatatable -->
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
