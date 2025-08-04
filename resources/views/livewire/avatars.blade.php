@section('title', 'ساخت آواتار رایگان')
@section('description', 'ساخت آواتار رایگان به سادگی و با چند کلیک در وب‌سایت ما انجام می‌شود.')
@section('keywords', 'ساخت آواتار رایگان, طراحی آواتار آنلاین, آواتار رایگان')
@section('og:title', 'ساخت آواتار رایگان')
@section('og:description', 'با وب‌سایت ما به راحتی و به صورت رایگان آواتارهای جذاب و حرفه‌ای طراحی کنید.')
@section('og:image', asset('home-page/images/avatar.s.png'))
@section('og:type', 'website')

<div>
    <x-page title="آواتارها">

        @session('success')
            <div class="mb-4 rounded-lg bg-green-100 px-6 py-4 text-green-800 border border-green-300 flex items-center">
                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endsession

        <div class="row justify-content-center">
            <div class="flex flex-col gap-5">
                <button command="show-modal" commandfor="avatarDialog"
                    class="rounded-md bg-primery-blue dark:bg-dark-yellow px-11 py-3 text-sm font-semibold text-white dark:text-black hover:bg-primery-blue/90 dark:hover:bg-dark-yellow/90">
                    ایجاد آواتار
                </button>

                <el-dialog>
                    <dialog id="avatarDialog" aria-labelledby="avatar-dialog-title" wire:ignore
                        class="fixed inset-0 m-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent p-0 backdrop:bg-transparent">
                        <el-dialog-backdrop
                            class="fixed inset-0 bg-gray-500/75 transition-opacity data-[closed]:opacity-0 data-[enter]:duration-300 data-[leave]:duration-200 data-[enter]:ease-out data-[leave]:ease-in"></el-dialog-backdrop>

                        <div tabindex="0"
                            class="flex min-h-full items-end justify-center p-4 text-center focus:outline focus:outline-0 sm:items-center sm:p-0 w-full">
                            <el-dialog-panel
                                class="relative transform overflow-hidden rounded-lg bg-white dark:bg-gray-800 text-left shadow-xl transition-all data-[closed]:translate-y-4 data-[closed]:opacity-0 data-[enter]:duration-300 data-[leave]:duration-200 data-[enter]:ease-out data-[leave]:ease-in sm:my-8 sm:w-full sm:max-w-4xl h-[90vh] flex flex-col data-[closed]:sm:translate-y-0 data-[closed]:sm:scale-95">

                                <!-- Modal Header RTL with Close Button -->
                                <div class="bg-white dark:bg-gray-800 px-4 pb-4 pt-5 sm:p-6 sm:pb-4 flex-shrink-0 flex flex-row-reverse items-center justify-between"
                                    dir="rtl">
                                    <button type="button" command="close" commandfor="avatarDialog"
                                        class="inline-flex items-center justify-center rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 w-8 h-8"
                                        aria-label="بستن">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <div class="flex items-center">
                                        <h3 id="avatar-dialog-title"
                                            class="text-base font-semibold text-gray-900 dark:text-white ml-4">ایجاد
                                            آواتار</h3>
                                    </div>
                                </div>
                                <div class="px-4 pb-4 sm:px-6 sm:pb-4 flex-shrink-0">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full"
                                            dir="rtl">
                                            <div class="mt-2">
                                                <input type="text" wire:model="name" id="avatarName"
                                                    placeholder="نام آواتار را وارد کنید"
                                                    class="w-full bg-[#e9f3fd] dark:bg-black placeholder:text-[#90bde9] dark:placeholder:text-white/40 dark:text-white/50 rounded-[10px] p-4 py-3 border border-primery-blue dark:border-dark-yellow placeholder:text-[#00000030] dark:ring-[#E59819]">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-6 overflow-y-auto flex-1 min-h-0 w-full">
                                    <iframe id="frame"
                                        class="frame w-full h-[60vh] rounded-xl border border-gray-300 dark:border-gray-600"
                                        allow="camera *; microphone *; clipboard-write"></iframe>
                                </div>

                                <div
                                    class="bg-gray-50 dark:bg-gray-900 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 flex-shrink-0">
                                    <button id="saveAvatarBtn"
                                        class="inline-flex w-full justify-center rounded-md bg-primery-blue dark:bg-dark-yellow px-3 py-2 text-sm font-semibold text-white dark:text-black shadow-sm hover:bg-primery-blue/90 dark:hover:bg-dark-yellow/90 sm:ml-3 sm:w-auto disabled:opacity-50">
                                        ذخیره آواتار
                                    </button>
                                    <button type="button" command="close" commandfor="avatarDialog"
                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-gray-800 px-5 py-3 text-base font-semibold text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 sm:mt-0 sm:w-auto sm:ml-4">
                                        لغو
                                    </button>
                                </div>
                            </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>

                <input type="text" wire:model.live="search" name="search" placeholder="جستجو آواتار "
                    class="bg-[#e9f3fd] dark:bg-black placeholder:text-[#90bde9] dark:placeholder:text-white/40 dark:text-white/50 rounded-[10px] p-4 border-0 placeholder:text-[#00000030] dark:ring-[#E59819]">

                @if ($products->count() > 0)

                    <x-table>
                        <x-slot name="header">
                            <th>ردیف</th>
                            <th>شناسه</th>
                            <th>نام</th>
                            <th>تصویر</th>
                            <th>فایل</th>
                            <th>تاریخ ایجاد</th>
                        </x-slot>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->name }}</td>
                                <td class="flex  justify-center items-center"><a href="{{ $product->latestImage->url }}"
                                        target="_blank"><img class="w-[60px] rounded-lg"
                                            src="{{ $product->latestImage->url }}" alt="تصویر آواتار"> </a> </td>
                                <td><a href="{{ $product->file->url }}">دانلود</a></td>
                                <td>{{ jdate($product->created_at)->format('Y/m/d') }}</td>
                            </tr>
                        @endforeach
                    </x-table>

                    {{ $products->links() }}
                @else
                    <div class="text-center text-gray-500 dark:text-gray-400 mt-4">
                        <p>آواتاری یافت نشد.</p>
                    </div>
                @endif
            </div>
        </div>
    </x-page>
</div>

@script
    <script>
        const subdomain = 'metargb';
        const frame = document.getElementById('frame');
        const saveButton = document.getElementById('saveAvatarBtn');
        const nameInput = document.getElementById('avatarName');
        const avatarSection = document.getElementById('avatarSection');

        let avatarUrl = '';
        let avatarImageURL = '';

        frame.src = `https://${subdomain}.readyplayer.me/avatar?frameApi`;

        window.addEventListener('message', subscribe);
        document.addEventListener('message', subscribe);

        function subscribe(event) {
            const json = parse(event);

            if (json?.source !== 'readyplayerme') {
                return;
            }

            if (json.eventName === 'v1.frame.ready') {
                frame.contentWindow.postMessage(
                    JSON.stringify({
                        target: 'readyplayerme',
                        type: 'subscribe',
                        eventName: 'v1.**'
                    }),
                    '*'
                );
            }

            if (json.eventName === 'v1.avatar.exported') {
                avatarUrl = json.data.url;
                avatarImageURL = 'https://models.readyplayer.me/' + json.data.avatarId + '.png';
                @this.set('avatarUrl', avatarUrl);
                @this.set('avatarImageURL', avatarImageURL);
            }
        }

        saveButton.addEventListener('click', function() {
            const name = nameInput.value.trim();
            if (!name) {
                alert('لطفاً نام آواتار را وارد کنید.');
                return;
            }

            document.querySelector('[command="close"][commandfor="avatarDialog"]').click();

            @this.set('name', name);
            @this.call('save');
        });

        function parse(event) {
            try {
                return JSON.parse(event.data);
            } catch (error) {
                return null;
            }
        }
    </script>
@endscript
