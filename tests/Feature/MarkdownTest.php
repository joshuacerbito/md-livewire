<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Classes\MarkdownParser;

class MarkdownTest extends TestCase
{
    public function test_headings()
    {
        $this->assertEquals("<h1>Heading 1</h1>", MarkdownParser::parse("# Heading 1"));
        $this->assertEquals("<h2>Heading 2</h2>", MarkdownParser::parse("## Heading 2"));
        $this->assertEquals("<h3>Heading 3</h3>", MarkdownParser::parse("### Heading 3"));
        $this->assertEquals("<h4>Heading 4</h4>", MarkdownParser::parse("#### Heading 4"));
        $this->assertEquals("<h5>Heading 5</h5>", MarkdownParser::parse("##### Heading 5"));
        $this->assertEquals("<h6>Heading 6</h6>", MarkdownParser::parse("###### Heading 6"));
    }

    public function test_paragraph()
    {
        $this->assertEquals("<p>Sample paragraph</p>", MarkdownParser::parse("Sample paragraph"));
    }

    public function test_emphasis()
    {
        $this->assertEquals("<p><em>Emphasis/Italic</em></p>", MarkdownParser::parse("*Emphasis/Italic*"));
        $this->assertEquals("<p><strong>Strong emphasis</strong></p>", MarkdownParser::parse("**Strong emphasis**"));
    }

    public function test_links()
    {
        $this->assertEquals('<p><a href="https://google.com">Sample link</a></p>', MarkdownParser::parse("[Sample link](https://google.com)"));
    }

    public function test_inline_code()
    {
        $this->assertEquals('<p><code>Inline code</code></p>', MarkdownParser::parse("`Inline code`"));
    }

    public function test_multiline_code()
    {
        $multiLineInput = "```JavaScript
Multi
line
code
```";
        $multiLineText = '<pre><code class="language-JavaScript">Multi
line
code</code></pre>';


        $this->assertEquals($multiLineText, MarkdownParser::parse($multiLineInput));
    }

    public function test_blockquote()
    {
        $this->assertEquals('<blockquote>
<p>Blockquote</p>
</blockquote>', MarkdownParser::parse("> Blockquote"));
    }

    public function test_horizontal_rule()
    {
        $this->assertEquals('<hr />', MarkdownParser::parse("---"));
    }

    public function test_image()
    {
        $this->assertEquals('<p><img src="https://picsum.photos/200/300" alt="Picsum" /></p>', MarkdownParser::parse("![Picsum](https://picsum.photos/200/300)"));
    }

    public function test_table()
    {
        $tableInput = ' A | B | C
                       ---|---|---';

        $tableOutput = '<table>
<thead>
<tr>
<th>A</th>
<th>B</th>
<th>C</th>
</tr>
</thead>
<tbody>
</tbody>
</table>';
        $this->assertEquals($tableOutput, MarkdownParser::parse($tableInput));
    }
}
