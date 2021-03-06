/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

(() => {
    const $editor = document.querySelector(".js-editor");
    const $textarea = document.querySelector(".editor__markdown");
    const $btnDownload = document.querySelector(".btn-save");
    const $btnPreview = document.querySelector(".btn-preview");

    function saveTextAsFile(title = "filname") {
        const textToWrite = $editor.value;
        const textFileAsBlob = new Blob([textToWrite], {
            type: "text/markdown",
        });
        const fileNameToSaveAs = `${title}.md`; //filename.extension

        const downloadLink = document.createElement("a");
        downloadLink.download = fileNameToSaveAs;
        downloadLink.innerHTML = "Download File";

        if (window.webkitURL != null) {
            downloadLink.href = window.webkitURL.createObjectURL(
                textFileAsBlob
            );
        } else {
            downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
            downloadLink.onclick = destroyClickedElement;
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);
        }

        downloadLink.click();
        $textarea.focus({ preventScroll: true });
    }

    document.addEventListener("DOMContentLoaded", () => {
        $btnDownload.addEventListener("click", (e) => {
            saveTextAsFile();
        });

        $btnPreview.addEventListener("click", (e) => {
            $editor.classList.toggle("is-previewing");
            !$editor.classList.contains("is-previewing") &&
                $textarea.focus({ preventScroll: true });
        });

        $textarea.addEventListener("keyup", (e) => {
            if (e.keyCode === 13) {
                $textarea.scrollTop = $textarea.offsetHeight;
            }
        });
    });
})();
