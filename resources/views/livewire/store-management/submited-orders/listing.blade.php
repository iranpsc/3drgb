<div>
    <x-page title="سفارشات ثبت شده">
        @if ($orders->count() > 0)
            <x-table>
                <x-slot:header>
                    <th>ردیف</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شماره تلفن</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </x-slot:header>

                @foreach ($orders as $order)
                    <tr wire:key="{{ $order->id }}">
                        <td>
                            <div class="text-center">
                                {{ $loop->iteration }}
                        </td>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ $order->name }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ $order->email }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ $order->phone }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ jdate($order->created_at)->format('Y/m/d') }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a class="px-2 text-white" style="background-color: rgba(38, 38, 156, 0.808);border-radius: 8px;" href="{{ route('submited-orders-show', $order->id) }}"
                                    class="btn btn-sm btn-primary">مشاهده</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $orders->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>
</div>
