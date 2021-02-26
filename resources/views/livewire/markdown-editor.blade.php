<section class="editor js-editor">
    <textarea wire:model.debounce.300ms="markdown" id="editor__markdown" class="editor__markdown" placeholder="Mark something down 😉" autofocus></textarea>
    <div class="editor__preview markdown-body">{!! $markdown_preview !!}</div>
    <button class="btn-save">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#2D527C;" d="M391.914,512H65.125c-29.517,0-53.53-24.013-53.53-53.53V53.53C11.597,24.013,35.608,0,65.125,0
                h381.75c29.517,0,53.53,24.013,53.53,53.53v374.092c0,8.831-7.16,15.99-15.99,15.99s-15.99-7.159-15.99-15.99V53.53
                c0-11.884-9.667-21.551-21.551-21.551H65.125c-11.884,0-21.551,9.667-21.551,21.551v404.94c0,11.884,9.667,21.551,21.551,21.551
                h326.789c8.829,0,15.99,7.159,15.99,15.99C407.903,504.841,400.745,512,391.914,512z"/>
            <rect x="148.865" y="15.99" style="fill:#CEE8FA;" width="214.261" height="128.397"/>
            <g>
                <path style="fill:#2D527C;" d="M363.131,160.375H148.869c-8.829,0-15.99-7.159-15.99-15.99V15.99c0-8.831,7.16-15.99,15.99-15.99
                    h214.261c8.829,0,15.99,7.159,15.99,15.99v128.395C379.12,153.216,371.962,160.375,363.131,160.375z M164.859,128.395h182.282
                    V31.979H164.859V128.395z"/>
                <path style="fill:#2D527C;" d="M305.035,100.9c-8.829,0-15.99-7.159-15.99-15.99V15.99c0-8.831,7.16-15.99,15.99-15.99
                    s15.99,7.159,15.99,15.99v68.92C321.025,93.741,313.867,100.9,305.035,100.9z"/>
            </g>
            <rect x="120.083" y="300.638" style="fill:#CEE8FA;" width="271.824" height="195.202"/>
            <g>
                <path style="fill:#2D527C;" d="M391.914,511.827H120.086c-8.829,0-15.99-7.159-15.99-15.99V300.631c0-8.831,7.16-15.99,15.99-15.99
                    h271.827c8.829,0,15.99,7.159,15.99,15.99v195.207C407.903,504.669,400.745,511.827,391.914,511.827z M136.076,479.848h239.848
                    V316.621H136.076V479.848z"/>
                <path style="fill:#2D527C;" d="M202.168,376.456h-82.081c-8.829,0-15.99-7.159-15.99-15.99s7.16-15.99,15.99-15.99h82.081
                    c8.829,0,15.99,7.159,15.99,15.99S210.999,376.456,202.168,376.456z"/>
                <path style="fill:#2D527C;" d="M287.979,443.612H120.086c-8.829,0-15.99-7.159-15.99-15.99c0-8.831,7.16-15.99,15.99-15.99h167.893
                    c8.829,0,15.99,7.159,15.99,15.99C303.969,436.454,296.81,443.612,287.979,443.612z"/>
            </g>
        </svg>
    </button>
    <button class="btn-preview">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.372 56.372" style="enable-background:new 0 0 56.372 56.372;" xml:space="preserve">
            <path style="fill:#E7ECED;" d="M56.372,28.284l-7.234,7.234c-11.517,11.517-30.19,11.517-41.707,0L0,28.087l7.234-7.234
                c11.517-11.517,30.19-11.517,41.707,0L56.372,28.284z"/>
            <circle style="fill:#3083C9;" cx="28.158" cy="28.156" r="12"/>
            <path style="fill:#FFFFFF;" d="M21.158,28.156c-0.552,0-1-0.448-1-1c0-3.86,3.14-7,7-7c0.552,0,1,0.448,1,1s-0.448,1-1,1
                c-2.757,0-5,2.243-5,5C22.158,27.708,21.711,28.156,21.158,28.156z"/>
        </svg>
    </button>
</section>
