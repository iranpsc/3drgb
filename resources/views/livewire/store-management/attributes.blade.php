<div>
    <x-page
     title="ویژگی ها"
    actionBtn="true"
    actionBtnLink="#"
    actionBtnText="ایجاد ویژگی جدید"
    toggle="modal"
    target="#create-attribute">
        @if ($attributes->count() > 0)

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
    
                @foreach ($attributes as $attribute)
                    <tr wire:key="{{ $attribute->id }}">
                        <td>
                            <div class="userDatatable-content">
                                {{ $loop->iteration }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $attribute->name }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $attribute->slug }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ jdate($attribute->created_at)->format('Y/m/d') }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                <x-button color="danger" wire:click="delete({{ $attribute->id }})"
                                    wire:confirm="آیا از حذف این دسته بندی مطمئن هستید؟">حذف</x-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $attributes->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>

    <x-modal id="create-attribute" title="ایجاد ویژگی جدید">
        <x-form.text type="text" name="name" wire:model="name" label="نام" />
        <x-form.text type="text" name="slug" wire:model="slug" label="نامک" />
        <x-slot:footer>
            <x-button color="primary" wire:click="save">ایجاد</x-button>
            <x-button color="danger" data-bs-dismiss="modal">بستن</x-button>
        </x-slot:footer>
    </x-modal>
</div>
