<?php

namespace JordJD\WikitextParser;

class Utils
{
    public static function stripTagsMaintainWhitespace(string $html)
    {
        $plaintext = $html;
        $plaintext = str_replace(PHP_EOL, ' ', $plaintext);
        $plaintext = str_replace('<', ' <', $plaintext);
        $plaintext = strip_tags($plaintext);
        $plaintext = str_replace('  ', ' ', $plaintext);

        return $plaintext;
    }
}