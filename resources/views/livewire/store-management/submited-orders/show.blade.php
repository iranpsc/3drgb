<div>
    <x-page title="جزئیات سفارش">
        <div class="row">
            <div class="col-md-6">
                <div class="bg-[#EFEFEF] dark:bg-[#9A9ECC] rounded-[10px] p-5 dark:text-[#2C2F32]">
                    <div class="card-header">
                        <h4 class="card-title ">اطلاعات مشتری</h4>
                    </div>
                    <div class="flex flex-col gap-5 w-full mt-7  ">

                        <div class="flex justify-between items-center">
                            <p>نام :</p>
                            <p> {{ $order->name }}</p>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <p>ایمیل :</p>
                            <p>{{ $order->email }}</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p>شماره تلفن : </p>
                            <p>{{ $order->phone }}</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p >موضوع : </p>
                            <p>{{ $order->subject }}</p>
                        </div>
                        <div class="flex flex-col md:flex-row gap-2 justify-between md:items-center">
                            <p >پیام  : </p>
                            <div class="flex justify-end">
                                <p style="width:85% ;">{{ $order->message }}</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <p > تاریخ ایجاد :  </p>
                            <p> {{ jdate($order->created_at)->format('Y/m/d') }}</p>
                        </div>

                        <p>
                            @if($order->attachment)
                                <div class="flex justify-between items-center">
                                    <p>فایل ضمیمه :</p>
                                    <a href="{{ asset('storage/' . $order->attachment) }}" target="_blank" class="text-white px-2 py-1" style="background-color: rgba(38, 38, 156, 0.808) ;border-radius: 8px;">مشاهده</a>
                                </div>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</div>
