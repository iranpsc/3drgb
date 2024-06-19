<div>
    <x-page title="پاسخ های کاربران">

        @session('message')
            <x-alert type="success" message="{{ session('message') }}" />
        @endsession

        <x-table>
            <x-slot name="header">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th>متن</th>
                <th>وضعیت</th>
                <th>تایید شده در</th>
                <th>تایید شده توسط</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </x-slot>

            @forelse ($review->replies as $reply)
                <tr wire:key="{{ $reply->id }}">
                    <td>
                        <div class="userDatatable-content">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $reply->user->name }}
                        </div>
                    </td>

                    <td>
                        <div class="userDatatable-content">
                            {{ $reply->comment }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $reply->approved ? 'منتشر شده' : 'منتشر نشده' }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $reply->approved_at }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $reply->approved_by }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content" style="direction:ltr">
                            {{ jdate($reply->created_at)->format('Y/m/d H:i:s') }}
                        </div>
                    </td>
                    <td>
                        <div class="flex flex-warp gap-2">
                            @if (!$reply->approved)
                                <button class="rounded-[10px] text-white px-2" style="background-color: green"
                                    wire:click="approve({{ $reply->id }})">تایید</button>
                                <button class="rounded-[10px] text-white px-2" style="background-color: red"
                                    class="btn btn-sm btn-danger" wire:click="delete({{ $reply->id }})"
                                    wire:confirm="آیا می خواهید این دیدگاه را حذف کنید؟">حذف</button>
                            @else
                                <button class="rounded-[10px] text-white px-2" style="background-color: red"
                                    class="btn btn-sm btn-danger" wire:click="delete({{ $review->id }})"
                                    wire:confirm="آیا می خواهید این دیدگاه را حذف کنید?">حذف</button>
                            @endif
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">
                        <x-alert type="warning" message="دیدگاهی وجود ندارد." />
                    </td>
                </tr>
            @endforelse
        </x-table>
    </x-page>
</div>
