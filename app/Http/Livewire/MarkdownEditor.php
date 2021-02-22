<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Classes\MarkdownParser;

class MarkdownEditor extends Component
{
    public $markdown;

    public function render()
    {
        return view('livewire.markdown-editor', [
            'markdown_preview' => MarkdownParser::parse($this->markdown)
        ]);
    }
}
