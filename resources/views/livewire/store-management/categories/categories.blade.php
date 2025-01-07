<div>
    <x-page
        title="دسته بندی ها"
        actionBtn="true"
        :actionBtnLink="route('categories.create')"
        actionBtnText=" ایجاد دسته بندی  +  ">
        @if ($categories->count() > 0)
            @if (session()->has('message'))
                <x-alert type="success" message="{{ session('message') }}" />
            @endif
            <x-table >
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
                            <div class="flex flex flex-col gap-1">
                                <a href="{{ route('categories.edit', $category->id) }}" class="flex justify-center items-center" style="background-color:orange;padding:5px;border-radius:8px ;">ویرایش</a>
                                <x-button style="background-color:red; padding:5px" wire:click="delete({{ $category->id }})"
                                    wire:confirm="آیا از حذف این دسته بندی مطمئن هستید؟">حذف</x-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $categories->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>
</div>
