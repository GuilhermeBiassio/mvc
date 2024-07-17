<?php

namespace App\Utils;

class View
{
    /**
     *Returns view content
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     *Returns rendered view content
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        //View content
        $contentView = self::getContentView($view);

        //Array keys
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);
        return str_replace($keys, array_values($vars), $contentView);
    }
}