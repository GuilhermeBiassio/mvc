<?php

namespace App\Controller\Pages;

use App\Utils\View;


class Home extends Page
{

    /**
     * Return the home view content
     * @return string
     */
    public static function getHome()
    {
        $content = View::render('pages/home', [
            'name' => 'Teste MVC',
            'description' => 'Teste de criação de arquitetura MVC'
        ]);

        return parent::getPage('Teste MVC', $content);
    }
}