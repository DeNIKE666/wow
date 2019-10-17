<?php

/**
 * Функция путь до картинки
 */

if (!function_exists('image')) {
    function image($path)
    {
        return Storage::exists($path) ? asset('storage/' . $path) : $path;
    }
}

/**
 * Функция для генерации иконок
 */

if (!function_exists('icons')) {
    function icons()
    {
        return [
            'percent' => 'Процент',
            'star' => 'Звёздочка'
        ];
    }
}

/**
 * Функция позиция всплывающего окна в категории
 */

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
