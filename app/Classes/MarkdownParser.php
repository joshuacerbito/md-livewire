<?php

namespace App\Classes;

class MarkdownParser
{
    public static function parse($string)
    {
        $parser = new \Parsedown();
        return $parser->text($string);
    }
}
