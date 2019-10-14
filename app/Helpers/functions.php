<?php

if (!function_exists('lastReplace')) {
    function lastReplace($str)
    {
        return Str::replaceLast(' ', '<br>', $str);
    }
}
