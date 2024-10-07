<div>
    <div class="flex flex-col items-center bg-gray-200 gap-3">
        <button class="bg-primery-blue rounded" onclick="openAvatarCreator()">Create Avatar</button>
        <p>Click the link below to view your avatar:</p>
  <a id="avatar-link" href="#" target="_blank" style="display:none;">View Avatar</a>
    </div>

  <!-- ایجاد یک iframe برای نمایش Ready Player Me -->
  <iframe id="rpm-frame" class="w-full h-[93.5vh]" allow="camera *; microphone *"></iframe>

  <!-- لینک برای نمایش URL آواتار -->
  

  <script>
    const frame = document.getElementById('rpm-frame');
    const avatarLink = document.getElementById('avatar-link');

    // Ready Player Me listener for receiving avatar URL
    window.addEventListener('message', receiveMessage, false);

    function receiveMessage(event) {
      if (event.origin === "https://meta-rgb.readyplayer.me") {
        const avatarUrl = event.data;
        if (typeof avatarUrl === 'string') {
          console.log('Avatar URL:', avatarUrl);

          // قرار دادن URL در href تگ a و نمایش آن
          avatarLink.href = avatarUrl;
          avatarLink.style.display = 'inline';  // نمایش لینک
        }
      }
    }

    function openAvatarCreator() {
      // باز کردن iframe و نمایش Ready Player Me
      frame.src = 'https://meta-rgb.readyplayer.me/avatar?appId=65e221503f3494050d2cfcff';
      frame.style.display = 'block';  // نمایش iframe
    }
  </script>
</div>