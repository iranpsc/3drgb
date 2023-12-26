<div>
    <x-page title="جزئیات سفارش">
        <div class="userDatatable orderDatatable shipped-dataTable global-shadow border-0 p-30 bg-white radius-xl w-100 mb-30">
            <div class="table-responsive">
               <table class="table mb-0 table-borderless border-0">
                  <thead>
                     <tr class="userDatatable-header">
                        <th>
                           <span class="userDatatable-title">شناسه سفارش</span>
                        </th>
                        <th>
                            <span class="userDatatable-title">مبلغ پرداختی</span>
                        </th>
                       <th>
                           <span class="userDatatable-title">وضعیت</span>
                       </th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>
                            <div class="orderDatatable-title">
                                {{ $order->tracking_id }}
                            </div>
                        </td>
                        <td>
                            <div class="orderDatatable-title">
                                {{$order->products->sum('final_price') }}
                            </div>
                        </td>
                        <td>
                            <div class="orderDatatable-title">
                                {{ $order->isPaid() ? 'پرداخت شده' : 'پرداخت نشده' }}
                            </div>
                        </td>
                    </tr>
                     <!-- End: tr -->
                  </tbody>
               </table><!-- End: table -->
            </div>
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
                           <span class="userDatatable-title">نام محصول</span>
                        </th>
                       <th>
                           <span class="userDatatable-title">تعداد دانلود</span>
                       </th>
                       <th>
                           <span class="userDatatable-title">آخرین دانلود</span>
                       </th>
                        <th>
                           <span class="userDatatable-title">عملیات</span>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                   @foreach ($order->products as $product)
                       <tr>
                           <td>{{ $loop->iteration }}</td>
                           <td>
                               <div class="orderDatatable-title">
                                   {{ $product->name }}
                               </div>
                           </td>
                           <td>
                               <div class="orderDatatable-title">
                                    0
                               </div>
                           </td>
                           <td>
                               <div class="orderDatatable-title">
                                --
                               </div>
                           </td>
                           <td>
                                <div class="orderDatatable-title">
                                    <x-button wire:click="download({{ $product->id }})">دانلود</x-button>
                                </div>
                           </td>
                       </tr>
                   @endforeach
                     <!-- End: tr -->
                  </tbody>
               </table><!-- End: table -->
            </div>
        </div>
    </x-page>
</div>
