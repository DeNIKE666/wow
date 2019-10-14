<?php

use Illuminate\Support\Str;

if (!function_exists('image')) {
    function image($path)
    {
        return asset('storage/' . $path);
    }
}

if (!function_exists('icons')) {
    function icons()
    {
        return [
            'percent' => 'Процент',
            'star' => 'Звёздочка'
        ];
    }
}

if (!function_exists('position')) {
    function position()
    {
        return [
            'top-line-1' => 'Первая линия',
            'top-line-2' => 'Вторая линия',
            'top-line-3' => 'Третия линия',
            'top-line-4' => 'Четвёртая линия',
        ];
    }
}

if (!function_exists('lastReplace')) {
    function lastReplace($str)
    {
        return Str::replaceLast(' ', '<br>', $str);
    }
}



