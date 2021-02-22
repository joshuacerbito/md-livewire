<section class="editor">
    <textarea wire:model.debounce.300ms="markdown" id="editor__markdown" class="editor__markdown" placeholder="Mark something down 😉" autofocus></textarea>
    <div class="editor__preview markdown-body">{!! $markdown_preview !!}</div>
    <button class="download-md">Download MD File</button>
</section>
