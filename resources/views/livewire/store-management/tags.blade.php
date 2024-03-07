<main class="main-content-smallNav">
<div>
    <x-page
     title="برچسب ها"
    actionBtn="true"
    actionBtnLink="#"
    actionBtnText="ایجاد برچسب جدید"
    toggle="modal"
    target="#create-tag">
        @if ($tags->count() > 0)
        
            @session('message')
                <x-alert type="success" message="{{ session('message') }}" />
            @endsession
            
            <x-table>
                <x-slot:header>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th>نامک</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </x-slot:header>
    
                @foreach ($tags as $tag)
                    <tr wire:key="{{ $tag->id }}">
                        <td>
                            <div class="userDatatable-content">
                                {{ $loop->iteration }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $tag->name }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $tag->slug }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ jdate($tag->created_at)->format('Y/m/d') }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                <x-button color="danger" wire:click="delete({{ $tag->id }})"
                                    wire:confirm="آیا از حذف این دسته بندی مطمئن هستید؟">حذف</x-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $tags->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>

    <div class="mx-auto w-[80%] flex flex-col gap-5">
    <x-modal id="create-tag" title="ایجاد برچسب جدید" >
        <div class="mx-auto flex flex-col gap-5 md:flex-row w-full">
        <x-form.text type="text" name="name" wire:model="name" label="نام" />
        <x-form.text type="text" name="slug" wire:model="slug" label="نامک" />
        </div>
        <x-slot:footer>
            <div  class="mx-auto flex flex-col gap-5 mt-5 md:flex-row">
            <x-button color="primary" wire:click="save">ایجاد</x-button>
            <x-button color="danger" data-bs-dismiss="modal">بستن</x-button>
            </div>
        </x-slot:footer>
    </x-modal>
    </div>
</div>
</main>