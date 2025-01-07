<div>
    <x-page title="ایجاد آواتار">
        <div class="row justify-content-center">
            <div class="flex flex-col gap-5">

                @session('message')
                    <x-alert type="success" message="{{ session('message') }}" />
                @endsession

                <x-form.text wire:model="name" name="name" label="نام" />

                <div wire:ignore>
                    <iframe id="frame" class="frame w-full h-96 md:w-full md:h-600"
                        allow="camera *; microphone *; clipboard-write"></iframe>
                </div>

                @if ($errors->has(['avatarUrl', 'avatarImageURL']))
                    <x-alert type="error" message="{{ __('Create your avatar first.') }}" />
                @endif

                <x-button wire:loading.attr="disabled" wire:click="save">ذخیره</x-button>
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
