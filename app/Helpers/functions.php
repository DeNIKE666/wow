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

        return isset($titleString[1]) ?
            '<span>' . $titleString[0] . '</span>' .
            '<div>' . $titleString[1] . '</div>' :
            '<span>' . $titleString[0] . '</span>';
    }
}
