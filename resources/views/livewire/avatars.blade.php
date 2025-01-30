@section('title', 'ساخت آواتار رایگان')
@section('description', 'ساخت آواتار رایگان به سادگی و با چند کلیک در وب‌سایت ما انجام می‌شود.')
@section('keywords', 'ساخت آواتار رایگان, طراحی آواتار آنلاین, آواتار رایگان')
@section('og:title', 'ساخت آواتار رایگان')
@section('og:description', 'با وب‌سایت ما به راحتی و به صورت رایگان آواتارهای جذاب و حرفه‌ای طراحی کنید.')
@section('og:image', asset('home-page/images/avatar.s.png'))
@section('og:type', 'website')

<div>
    <x-page title="آواتارها">
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

                <button id="openModalBtn" class="px-11 py-3 bg-primery-blue dark:bg-dark-yellow rounded-[10px] dark:text-black text-white">
                    ایجاد آواتار
                </button>

                <x-modal2  title="ایجاد آواتار">
                    <div class="w-full flex flex-col items-center gap-5">
                        <div class="flex items-center">
                            <input type="text" wire:model="name" id="avatarName" placeholder="نام آواتار را وارد کنید" 
                                class="bg-[#e9f3fd] dark:bg-black placeholder:text-[#90bde9] dark:placeholder:text-white/40 dark:text-white/50 rounded-[10px] p-4 py-3 border-1 border-primery-blue dark:border-dark-yellow placeholder:text-[#00000030] dark:ring-[#E59819] lg:w-96">     
                        </div>
                        <button id="submitNameBtn" class="px-11 py-3 bg-primery-blue dark:bg-dark-yellow rounded-[10px] dark:text-black text-white">
                            ثبت نام
                        </button>

                        <div id="avatarSection" class="hidden w-full ">
                            <iframe id="frame" class="frame w-full h-[90vh] rounded-xl"
                                allow="camera *; microphone *; clipboard-write"></iframe>
                        </div>
                        <button id="saveAvatarBtn" wire:loading.attr="disabled" wire:click="save" class="px-11 py-3 bg-primery-blue dark:bg-dark-yellow rounded-[10px] dark:text-black text-white hidden">
                            ذخیره آواتار
                        </button>
                    </div>
                </x-modal2>
            </div>
        </div>
    </x-page>
</div>

@script
<script>
const subdomain = '3drgb';
const frame = document.getElementById('frame');
const saveButton = document.getElementById('saveAvatarBtn');
const nameInput = document.getElementById('avatarName');
const submitNameBtn = document.getElementById('submitNameBtn');
const avatarSection = document.getElementById('avatarSection');

let avatarUrl = '';
let avatarImageURL = '';


submitNameBtn.addEventListener('click', function () {
    if (!nameInput.value.trim()) {
        alert('لطفا نام آواتار را وارد کنید');
        return;
    }


    nameInput.classList.add('hidden');
    submitNameBtn.classList.add('hidden');
    

    avatarSection.classList.remove('hidden'); 
    frame.src = `https://${subdomain}.readyplayer.me/avatar?frameApi`;
});

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

        saveButton.classList.remove('hidden');
        saveButton.style.display = "block";
        

        const intervalId = setInterval(() => {
            if (saveButton.classList.contains('hidden') || saveButton.style.display === "none") {
                submitNameBtn.style.display = "none";
                nameInput.style.display = "none";
                saveButton.classList.remove('hidden');
                saveButton.style.display = "block";
                
            } else {
                clearInterval(intervalId); 
            }
        }, 1000);

        setTimeout(() => {
            avatarSection.classList.add('hidden');
        }, 1000);
    }
    document.getElementById('saveAvatarBtn').addEventListener('click', function () {
    setTimeout(() => {
        document.getElementById('myModal').style.display = 'none'; 
    }, 1000);
});

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
