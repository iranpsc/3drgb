@section('title', 'ساخت آواتار رایگان  ')
@section('description', 'ساخت آواتار رایگان به سادگی و با چند کلیک در وب‌سایت ما انجام می‌شود. از ابزارهای حرفه‌ای برای طراحی آواتارهای شخصی خود به صورت رایگان استفاده کنید.')
@section('keywords', 'ساخت آواتار رایگان, طراحی آواتار آنلاین, آواتار رایگان, ابزار طراحی آواتار')
@section('og:title', 'ساخت آواتار رایگان')
@section('og:description', 'با وب‌سایت ما به راحتی و به صورت رایگان آواتارهای جذاب و حرفه‌ای طراحی کنید.')
@section('og:image', asset('home-page/images/avatar.s.png'))
@section('og:type', 'website')


<div>
    <x-page title="آواتارها"  toggle="modal2" 
        target="#create-avatar">
        <div class="row justify-content-center">
            <div class="flex flex-col gap-5">

                <input type="text" wire:model.live="search" name="search" placeholder="جستجو آواتار " class="bg-[#e9f3fd] dark:bg-black placeholder:text-[#90bde9] dark:placeholder:text-white/40 dark:text-white/50 rounded-[10px] p-4 border-0 placeholder:text-[#00000030] dark:ring-[#E59819]">

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
                            <td><a href="{{ $product->latestImage->url }}" target="_blank">لینک تصویر</a></td>
                            <td><a href="{{ $product->file->url }}">دانلود</a></td>
                            <td>{{ jdate($product->created_at)->format('Y/m/d') }}</td>
                        </tr>
                    @endforeach
                </x-table>

                {{ $products->links() }}
                <button id="openModalBtn" class="px-11 py-3 bg-primery-blue dark:bg-dark-yellow rounded-[10px] dark:text-black text-white">ایجاد آواتار</button>
                <x-modal2 id="create-avatar" title="ایجاد آواتار">
                    <div class="  w-full flex flex-col lg:flex-row items-center gap-5">
                        <div class="flex items-center ">
                            <input type="text" wire:model="name" name="name" placeholder="نام آواتار را وارد کنید" class="bg-[#e9f3fd] dark:bg-black placeholder:text-[#90bde9] dark:placeholder:text-white/40 dark:text-white/50 rounded-[10px] p-4 py-3 border-1 border-primery-blue dark:border-dark-yellow placeholder:text-[#00000030] dark:ring-[#E59819] lg:w-96">
                        </div>
                    <div class="flex gap-5 items-center justify-center">
                        <button class="px-11 py-3 bg-primery-blue dark:bg-dark-yellow rounded-[10px] dark:text-black text-white" wire:loading.attr="disabled" wire:click="save">ذخیره</button>
                    </div>
                    
                    </div>
                    <div wire:ignore>
                        <iframe id="frame" class="frame w-full h-[80vh] md:w-full rounded-xl"
                            allow="camera *; microphone *; clipboard-write"></iframe>
                    </div>
                    @if ($errors->has(['avatarUrl', 'avatarImageURL']))
                        <x-alert type="error" message="{{ __('Create your avatar first.') }}" />
                    @endif

                </x-modal2>
            </div>
        </div>
    </x-page>
</div>

@script
    
    <script>
        const subdomain = '3drgb';
        const frame = document.getElementById('frame');
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

            // Subscribe to all events sent from Ready Player Me once frame is ready
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

            // Get avatar GLB URL
            if (json.eventName === 'v1.avatar.exported') {
                avatarUrl = json.data.url;
                avatarImageURL = 'https://models.readyplayer.me/' + json.data.avatarId + '.png';
                @this.set('avatarUrl', avatarUrl);
                @this.set('avatarImageURL', avatarImageURL);
            }
        }

        function parse(event) {
            try {
                return JSON.parse(event.data);
            } catch (error) {
                return null;
            }
        }
    </script>
@endscript
