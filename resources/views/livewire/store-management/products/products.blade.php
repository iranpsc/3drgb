<div>
    <x-page title="Products">
        @if ($products->count() > 0)
        @if (session()->has('message'))
            <x-alert type="success" message="{{ session('message') }}" />
        @endif
        <x-table>
            <x-slot:header>
                <th>ردیف</th>
                <th>نام</th>
                <th>نامک</th>
                <th>قیمت</th>
                <th>قیمت ویژه</th>
                <th>دسته بندی</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </x-slot:header>

            @foreach ($products as $product)
                <tr wire:key="{{ $product->id }}">
                    <td>
                        <div class="userDatatable-content">
                            {{ $loop->iteration }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $product->name }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $product->slug }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $product->price }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $product->sale_price }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $product->category->name }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ jdate($product->created_at)->format('Y/m/d') }}
                         </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">ویرایش</a>
                            <x-button color="danger" wire:click="delete({{ $product->id }})" wire:confirm="آیا از حذف این دسته بندی مطمئن هستید؟">حذف</x-button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-table>

        {{ $products->links() }}
    @else
        <x-empty />
    @endif
    </x-page>
</div>
