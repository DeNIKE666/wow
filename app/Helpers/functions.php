<?php

if (!function_exists('lastReplace')) {
    function lastReplace($str)
    {
        return Str::replaceLast(' ', '<br>', $str);
    }
}

if (!function_exists('replaceDiv')) {
    function replaceDiv($str)
    {
        $titleString = explode(' ', $str);

        return '<span>' . $titleString[0] . '</span>'
            . "\n" . '<div>' . $titleString[1]
            . '</div>';
    }
}
