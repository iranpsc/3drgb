<div>
    <div class="flex flex-col items-center bg-gray-200 gap-3">
        <button class="bg-primery-blue rounded" id="create-avatar-btn">Create Avatar</button>
        <p>Click the link below to view your avatar:</p>
        <a id="avatar-link" href="#" target="_blank" style="display:none;">View Avatar</a>
    </div>

    <!-- ایجاد یک iframe برای نمایش Ready Player Me -->
    <iframe id="rpm-frame" class="w-full h-[93.5vh]" allow="camera *; microphone *"></iframe>
</div>

@script
    <script>
        const createAvatarBtn = document.getElementById('create-avatar-btn');
        const frame = document.getElementById('rpm-frame');
        const avatarLink = document.getElementById('avatar-link');

        // Ready Player Me listener for receiving avatar URL
        window.addEventListener('message', receiveMessage, false);

        function receiveMessage(event) {
            if (event.origin === "https://meta-rgb.readyplayer.me") {
                const avatarUrl = event.data;
                if (typeof avatarUrl === 'string') {
                    console.log('Avatar URL:', avatarUrl);

                    // Set URL to a tag href and display it
                    avatarLink.href = avatarUrl;
                    avatarLink.style.display = 'inline'; // Display link
                }
            }
        }

        createAvatarBtn.addEventListener('click', function() {
            // Open iframe and show Ready Player Me
            frame.src = 'https://meta-rgb.readyplayer.me/avatar?appId=65e221503f3494050d2cfcff';
            frame.style.display = 'block'; // Display iframe
        });
    </script>
@endscript
