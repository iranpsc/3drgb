<div>
    <x-page title="سفارشات">

        @session('error')
            <x-alert type="danger" :message="session('error')" />
        @endsession
        
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                @if($orders->count() == 0)
                    <x-empty-page />
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
                                    <span class="userDatatable-title">وضعیت</span>
                                </th>
                                 <th>
                                    <span class="userDatatable-title">عملیات</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($orders as $order)
                                <tr wire:key="{{ $order->id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            {{ $order->tracking_id }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            {{ $order->products->pluck('name')->implode(', ') }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            {{$order->total_price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            {{ $order->isPaid() ? 'پرداخت شده' : 'پرداخت نشده' }}
                                        </div>
                                    </td>
                                    <td>
                                        @if($order->isPaid())
                                            <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-success btn-sm">جزئیات</a>
                                        @else
                                            <x-button wire:click="pay({{ $order->id }})">پرداخت</x-button>
                                        @endif
                                    </td>
                                </tr>
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
