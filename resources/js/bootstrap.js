window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

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
    const $downloadBtn = document.querySelector(".download-md");

    function saveTextAsFile(title = "filname") {
        const textToWrite = document.getElementById("editor__markdown").value;
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
    }

    document.addEventListener("DOMContentLoaded", () => {
        $downloadBtn.addEventListener("click", (e) => {
            alert(1);
            saveTextAsFile();
        });
    });
})();
