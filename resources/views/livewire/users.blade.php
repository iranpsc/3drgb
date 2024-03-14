<div>
    <x-page title="کاربران">
        <div class="row">
            <div class="col-12">
                <div class="userDatatable global-shadow border p-25 bg-white radius-xl w-100">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="pr-3">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0">لیست کاربران</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input name="search" id="search" wire:model.live="search" type="search"
                                        placeholder="جستجو" class="form-control" />
                                </div>
                            </div>
                            <hr class="mt-15 mb-15">
                        </div><!-- End: .col -->
                    </div><!-- End: .row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="userDatatable-title">ردیف</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">نام</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">ایمیل</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">شماره موبایل</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">تاریخ عضویت</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">تعداد خرید</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="orderDatatable-title">
                                                        {{ $user->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="orderDatatable-title">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="orderDatatable-title">
                                                        {{ $user->phone }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="orderDatatable-title">
                                                        {{ $user->created_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="orderDatatable-title">
                                                        {{ $user->products_count }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- End: tr -->
                                    </tbody>
                                </table><!-- End: table -->
                                <div class="d-flex justify-content-center">
                                    {{ $users->links() }}
                                </div>
                            </div><!-- End: .table-responsive -->
                        </div><!-- End: .col -->
                    </div><!-- End: .row -->
                </div><!-- End: .userDatatable -->
            </div><!-- End: .col -->
        </div><!-- End: .row -->
    </x-page>
</div>
