<div>
    <x-page title="پیام های دریافتی">
        @if ($messages->count() > 0)
            <x-table>
                <x-slot:header>
                    <th>ردیف</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شماره تلفن</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </x-slot:header>

                @foreach ($messages as $message)
                    <tr wire:key="{{ $message->id }}">
                        <td>
                            <div class="text-center">
                                {{ $loop->iteration }}
                        </td>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ $message->name }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ $message->email }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ $message->phone }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                {{ jdate($message->created_at)->format('Y/m/d') }}
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <a class="px-2 text-white" style="background-color: rgba(38, 38, 156, 0.808);border-radius: 8px;" href="#"
                                    class="btn btn-sm btn-primary">مشاهده پیام</a>
                                <x-modal id="message-{{ $message->id }}" title="مشاهده پیام">
                                    <div class="text-center">
                                        <p>{{ $message->message }}</p>
                                    </div>
                                </x-modal>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $messages->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>
</div>
