<div>
    <style>
        table {
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid gray;
            padding: 10px;
        }
    </style>
    <x-page title="خریدها">

        @session('error')
            <x-alert type="danger" :message="session('error')" />
        @endsession

        <div class="flex flex-col justify-center items-center " style="overflow-x:hidden ">
            <div class="overflow-x-auto w-full">
                <div class="col-lg-12">
                    @if ($orders->count() == 0)
                        <x-empty-page />
                    @else
                        <div>
                            <div class=" w-full">
                                <table class="table mb-0 table-borderless border-0 w-full">
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
                                                        {{ $order->total_price }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="orderDatatable-title">
                                                        {{ $order->isPaid() ? 'پرداخت شده' : 'پرداخت نشده' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($order->isPaid())
                                                        <div
                                                            class="flex justify-center items-center w-full text-center">
                                                            <a href="{{ route('user.orders.show', $order->id) }}"
                                                                class="text-white px-2 w-full py-3 "
                                                                style="border-radius: 8px; background-color: rgb(122, 122, 122)">جزئیات</a>
                                                        </div>
                                                    @else
                                                        <x-button
                                                            wire:click="pay({{ $order->id }})">پرداخت</x-button>
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
