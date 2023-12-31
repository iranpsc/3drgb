<div>
    <x-page
        title="پیام ها"
        actionBtn="true"
        :actionBtnLink="route('tickets.create')"
        actionBtnText="ایجاد پیام جدید">
        @if ($tickets->count() > 0)
            <x-table>
                <x-slot:header>
                    <th>ردیف</th>
                    <th>فرستنده</th>
                    <th>موضوع</th>
                    <th>اولویت</th>
                    <th>وضعیت</th>
                    <th>تاریخ ارسال</th>
                    <th>جزئیات</th>
                    <th>عملیات</th>
                </x-slot:header>
    
                @foreach ($tickets as $ticket)
                    <tr wire:key="{{ $ticket->id }}">
                        <td>
                            <div class="userDatatable-content">
                                {{ $loop->iteration }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $ticket->user->name }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $ticket->title }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $ticket->priority }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $ticket->response_status }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ jdate($ticket->created_at)->format('Y/m/d') }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                <a href="{{ route('tickets.show', $ticket->id) }}">مشاهده</a>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                @if($ticket->user->is(Auth::user()))
                                    <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-info btn-sm">ویرایش</a>
                                @endif
                                @if(Auth::user()->hasRole('admin'))
                                    <x-button color="danger" wire:click="delete({{ $ticket->id }})"
                                        wire:confirm="آیا از حذف این پیام مطمئن هستید؟">حذف</x-button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $tickets->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>
</div>
