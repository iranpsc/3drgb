<div>
    <x-page
     title="دسته بندی ها"
    actionBtn="true"
    :actionBtnLink="route('categories.create')"
    actionBtnText="ایجاد دسته بندی">
        @if ($categories->count() > 0)
            @if (session()->has('message'))
                <x-alert type="success" message="{{ session('message') }}" />
            @endif
            <x-table>
                <x-slot:header>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th>نامک</th>
                    <th>دسته والد</th>
                    <th>تاریخ ایجاد</th>
                    <th>تاریخ ویرایش</th>
                    <th>عملیات</th>
                </x-slot:header>
    
                @foreach ($categories as $category)
                    <tr wire:key="{{ $category->id }}">
                        <td>
                            <div class="userDatatable-content">
                                {{ $loop->iteration }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $category->name }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $category->slug }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ $category->parent?->name }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ jdate($category->created_at)->format('Y/m/d') }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ jdate($category->updated_at)->format('Y/m/d') }}</td>
                             </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">ویرایش</a>
                                <x-button color="danger" wire:click="delete({{ $category->id }})"
                                    wire:confirm="آیا از حذف این دسته بندی مطمئن هستید؟">حذف</x-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $categories->links() }}
        @else
            <x-empty />
        @endif
    </x-page>
</div>
