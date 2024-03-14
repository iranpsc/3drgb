<div>
    <x-page title="دیدگاه های کاربران">

        @session('message')
            <x-alert type="success" message="{{ session('message') }}" />
        @endsession
        
        <x-table>
            <x-slot name="header">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th>محصول</th>
                <th>متن</th>
                <th>امتیاز</th>
                <th>وضعیت</th>
                <th>تایید شده در</th>
                <th>تایید شده توسط</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </x-slot>

            @forelse ($reviews as $review)
                <tr wire:key="{{ $review->id }}">
                    <td>
                        <div class="userDatatable-content">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->user->name }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->product->name }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->comment }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->rating }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->approved ? 'منتشر شده' : 'منتشر نشده' }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->approved_at }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $review->approved_by }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content" style="direction:ltr">
                            {{ jdate($review->created_at)->format('Y/m/d H:i:s') }}
                        </div>
                    </td>
                    <td>
                        <div class="flex flex-warp gap-2">
                            @if(!$review->approved)
                                <button class="rounded-[10px] text-white px-2" style="background-color: green"  wire:click="approve({{ $review->id }})">تایید</button>
                                <button class="rounded-[10px] text-white px-2" style="background-color: red" class="btn btn-sm btn-danger" wire:click="delete({{ $review->id }})"
                                    wire:confirm="آیا می خواهید این دیدگاه را حذف کنید؟">حذف</button>
                            @else
                                <button class="rounded-[10px] text-white px-2" style="background-color: red" class="btn btn-sm btn-danger" wire:click="delete({{ $review->id }})"
                                    wire:confirm="آیا می خواهید این دیدگاه را حذف کنید?">حذف</button>
                            @endif
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        <x-alert type="warning" message="دیدگاهی وجود ندارد." />
                    </td>
                </tr>
            @endforelse
        </x-table>
    </x-page>
</div>
