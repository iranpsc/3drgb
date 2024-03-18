<div>
    <main >
        <section>
            <div class="bg-[#000BEEF7] w-full py-[10px] text-white text-sm font-mono hidden lg:block px-5">
                <div class="flex items-center justify-between max-w-[1500px] mx-auto">
                    <div>
                        <a href="#" class="px-4">قوانین و مجوزات</a>
                        <a href="#" class="px-4 border-x"> سوالات متداول </a>
                        <a href="#" class="px-4"> سیاست حفظ حریم خصوصی </a>
                    </div>
                    <div class="flex gap-4">
                        <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (1).png"
                                    alt=""></a></div>
                        <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (2).png"
                                    alt=""></a></div>
                        <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (3).png"
                                    alt=""></a></div>
                        <div><a href="#"><img src="https://3d.irpsc.com/home-page/images/Union (4).png"
                                    alt=""></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-[1500px] mx-auto p-4 lg:p-9 mt-24 lg:mt-14">
            <div class="w-full bg-white dark:bg-[#001448] rounded-xl dark:text-white p-5 lg:p-7">
                <h1 class="text-3xl dark:text-white font-bold py-5 text-center lg:text-right"> ثبت سفارش</h1>

                <div class="flex-col flex gap-7 justify-center w-full">
                    <div class="flex flex-col gap-7 w-full 2xl:w-1/2 justify-center ">
                        <div>
                            <p class="text-black/50 dark:text-gray-300 py-1 text-center lg:text-right">     
                                جهت ثبت سفارش طراحی، فرم زیرا پر کنید.</p>
                        </div>

                        @session('message')
                            <div class="bg-green-500 text-white p-3 rounded-lg text-center">
                                {{ session('message') }}
                            </div>
                        @endsession

                        <form wire:submit="submit">
                            <div class="grid lg:grid-cols-2 gap-7">
                                @guest
                                    <x-form.text name="name" label="نام و نام خانوادگی" wire:model="name" />

                                    <x-form.text name="phone" label="شماره تلفن" wire:model="phone" />

                                    <x-form.text name="email" label="پست الکترونیک" wire:model="email" />
                                @endguest

                                <x-form.text name="subject" label="موضوع پیام" wire:model="subject" />

                                <x-form.file name="attachment" label="فایل ضمیمه" wire:model="attachment" style="width: 100%"/>

                            </div>
                            <div class="flex flex-col gap-7 w-full mt-5">
                                <x-form.textarea name="message" label="پیام خود را اینجا بنویسید..."
                                    wire:model="message" />

                                <x-button type="submit">ارسال پیام</x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
