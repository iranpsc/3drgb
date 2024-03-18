<div>
    <x-page title="جزئیات سفارش">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">اطلاعات مشتری</h4>
                    </div>
                    <div class="card-body">
                        <p>نام : {{ $order->name }}</p>
                        <p>ایمیل : {{ $order->email }}</p>
                        <p>شماره تلفن : {{ $order->phone }}</p>
                        <p>موضوع : {{ $order->subject }}</p>
                        <p>پیام : {{ $order->message }}</p>
                        <p>
                            تاریخ ایجاد : {{ jdate($order->created_at)->format('Y/m/d') }}
                        </p>
                        <p>
                            @if($order->attachment)
                                فایل ضمیمه : <a href="{{ asset('storage/' . $order->attachment) }}" target="_blank">مشاهده</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
