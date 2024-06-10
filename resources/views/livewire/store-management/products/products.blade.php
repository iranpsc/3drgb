<div>
    <x-page title="محصولات">

        
        <div class="w-full flex gap-5  mt-5 bg-[#D8E5FD] dark:bg-[#4A4E7C] rounded-full  p-2  " style="max-width: 320px ;margin-bottom: 20px">
            <div class="flex justify-center items-center p-2 w-min">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="dark:stroke-white"
                        d="M11.4582 21.7501C17.1421 21.7501 21.7498 17.1423 21.7498 11.4584C21.7498 5.77448 17.1421 1.16675 11.4582 1.16675C5.77424 1.16675 1.1665 5.77448 1.1665 11.4584C1.1665 17.1423 5.77424 21.7501 11.4582 21.7501Z"
                        stroke="#000BEE" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path class="dark:stroke-white" d="M22.8332 22.8334L20.6665 20.6667"
                        stroke="#000BEE" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>

                <input placeholder="جستوجو محصول" type="text" class=" w-full  text-[#ACB9FA] font-bold ring-transparent outline-transparent    focus:!outline-0  focus:!right-0 border-0 focus:border-0 ring-offset-0  focus:ring-transparent     bg-transparent" wire:model.live="search">
        </div>
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
                                {{ $product->name }} <br> {{ $product->sku }}
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
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="px-2 py-1 rounded-[10px] text-white font-bold text-sm"
                                        style="background-color:#0EBDE2;">ویرایش</a>
                                    <a href="{{ route('products.show', $product->sku) }}"
                                        class="px-2 py-1 rounded-[10px] text-white font-bold text-sm"
                                        style="background-color:blue">جزییات</a>
                                    <button type="button" class="px-2 py-1 rounded-[10px] text-white font-bold text-sm"
                                        wire:click="delete({{ $product->id }})"
                                        wire:confirm="آیا از حذف این محصول مطمئن هستید؟"
                                        style="background-color:red;">حذف</button>
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
