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
                                {{ __('اگر شما ایمیل را دریافت نکرده اید') }}, <a href="{{ route('verification.send') }}" class="text-primary hover:text-primary-dark focus:outline-none focus:underline transition ease-in-out duration-150">{{ __('برای دریافت دیگری کلیک کنید') }}</a>.
                            </div>

                            <div class="mt-4 flex items-center justify-between">
                                
                                @if(session()->has('message'))
                                    <x-alert type="success" message="{{ session('message') }}" />
                                @endif

                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <x-button type="submit" color="primary" size="block">
                                            {{ __('درخواست دوباره ارسال') }}
                                        </x-button>
                                    </div>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="btn btn-link text-gray-600 hover:text-gray-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                        {{ __('خروج') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-page>
</x-layouts.app>