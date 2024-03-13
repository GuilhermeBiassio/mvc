<?php

namespace App\Controller\Pages;

use App\Utils\View;


class Home
{

    /**
     * Return the home view content
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home', [
            'name' => 'Teste MVC',
            'description' => 'Teste de criação de arquitetura MVC'
        ]);
    }
}