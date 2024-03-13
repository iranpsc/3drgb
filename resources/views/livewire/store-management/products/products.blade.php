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
                            <div>
                                {{ $loop->iteration }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $product->name }} <br> {{ $product->sku}}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $product->slug }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $product->price }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $product->sale_price }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $product->category->name }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $product->published ? 'منتشر شده' : 'منتشر نشده' }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ jdate($product->created_at)->format('Y/m/d') }}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content flex items-center ">
                                <div class="d-flex justify-content-start gap-2">
                                    <a href="{{ route('products.edit', $product->id) }}" class="px-2 py-1 rounded-[10px] text-white font-bold text-sm" style="background-color:#0EBDE2;">ویرایش</a>
                                                                    
                                    @if ($product->published)
                                        <a href="{{ route('products.show', $product->slug) }}" class="px-2 py-1 rounded-[10px] text-white font-bold text-sm" style="background-color:blue">انتشار</a>
                                    @endif
    
                                    @if(!$product->hasOrders())
                                        <button type="button" class="px-2 py-1 rounded-[10px] text-white font-bold text-sm" wire:click="delete({{ $product->id }})" wire:confirm="آیا از حذف این محصول مطمئن هستید؟" style="background-color:red;">حذف</button>
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
