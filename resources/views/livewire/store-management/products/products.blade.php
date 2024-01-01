<div>
    <x-page title="محصولات">

        @session('message')
            <x-alert type="success" message="{{ session('message') }}" />
        @endsession
        
        @if ($products->count() > 0)
            <x-table>
                <x-slot:header>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th>نامک</th>
                    <th>قیمت</th>
                    <th>قیمت ویژه</th>
                    <th>دسته بندی</th>
                    <th>وضعیت</th>
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
                                {{ $product->published ? 'منتشر شده' : 'منتشر نشده' }}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{ jdate($product->created_at)->format('Y/m/d') }}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                <div class="d-flex justify-content-start gap-2">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                                    
                                    @if ($product->published)
                                        <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    @endif
    
                                    @if(!$product->hasOrders())
                                        <button type="button" class="btn btn-danger" wire:click="delete({{ $product->id }})" wire:confirm="آیا از حذف این محصول مطمئن هستید؟"><i class="fa fa-trash"></i></button>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>

            {{ $products->links() }}
        @else
            <x-empty-page />
        @endif
    </x-page>
</div>
