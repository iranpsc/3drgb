<div>
    <x-page title="سفارشات">
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                @if($orders->count() == 0)
                    <x-alert type="warning" :message="__('سفارشی یافت نشد')" />
                @else
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
                                     <span class="userDatatable-title">تعداد دانلود</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">وضعیت</span>
                                </th>
                                 <th>
                                    <span class="userDatatable-title float-end">عملیات</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($orders as $order)
                                @foreach($order->products as $product)
                                    <tr>
                                        <td>{{ $loop->parent->iteration }}</td>
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
                                            <div class="orderDatatable-title">
                                                0
                                            </div>
                                        </td>
                                        <td>
                                            <div class="orderDatatable-title">
                                                {{ $order->status === 'OK' ? 'پرداخت شده' : 'پرداخت نشده' }}
                                            </div>
                                        </td>
                                        <td>
                                            @if($order->status === 'OK')
                                                <x-button wire:click="download({{ $product->id }})"><i class="uil uil-download-alt"></i>دانلود</x-button>
                                            @else
                                                <x-button wire:click="pay({{ $order->id }})"><i class="uil uil-download-alt"></i>پرداخت</x-button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                              <!-- End: tr -->
                           </tbody>
                        </table><!-- End: table -->
                     </div>
                     <div class="d-flex justify-content-nd-end justify-content-center mt-15 pt-25 border-top">
                        {{ $orders->links() }}
                     </div>
                  </div><!-- End: .userDatatable -->
                @endif
               </div><!-- End: .col -->
            </div>
         </div>
    </x-page>
</div>
