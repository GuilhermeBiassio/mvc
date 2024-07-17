<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home
{
    /**
     * Returns content (view) from home
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home', [
            'title' => 'Home',
            'description' => 'This is home page'
        ]);
    }
}