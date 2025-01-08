<div>
    <x-page title="آواتارها" actionBtn="true" actionBtnLink="#" actionBtnText="ایجاد آواتار" toggle="modal"
        target="#create-avatar">
        <div class="row justify-content-center">
            <div class="flex flex-col gap-5">

                <x-form.text wire:model.live="search" name="search" label="جستجو" />

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

                <x-modal id="create-avatar" title="ایجاد آواتار">
                    <x-form.text wire:model="name" name="name" label="نام" />
                    <div wire:ignore>
                        <iframe id="frame" class="frame w-full h-96 md:w-full md:h-600"
                            allow="camera *; microphone *; clipboard-write"></iframe>
                    </div>
                    @if ($errors->has(['avatarUrl', 'avatarImageURL']))
                        <x-alert type="error" message="{{ __('Create your avatar first.') }}" />
                    @endif
                    <x-slot name="footer">
                        <x-button wire:loading.attr="disabled" wire:click="save">ذخیره</x-button>
                        <x-button color="danger" data-bs-dismiss="modal">لغو</x-button>
                    </x-slot>
                </x-modal>
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
