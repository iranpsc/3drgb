<x-layouts.app title="آدرس ایمیل تایید نشده است">
    <x-page title="تایید آدرس ایمیل">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-light">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h4>تایید آدرس ایمیل</h4>
                            </div>

                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('قبل از ادامه، لطفاً ایمیل خود را برای یک لینک تأیید بررسی کنید.') }}
                                {{ __('اگر شما ایمیل را دریافت نکرده اید برای دریافت لینک دیگری کلیک کنید') }}.
                            </div>

                            <div class="mt-4 flex items-center justify-between">
                                
                                @session('message')
                                    <x-alert type="success" :message="session('message')" />
                                @endsession

                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <x-button type="submit" color="primary" size="block">
                                            {{ __('درخواست دوباره ارسال ایمیل') }}
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</x-layouts.app>