<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class Home extends Page
{
    /**
     * Returns content (view) from home
     * @return string
     */
    public static function getHome()
    {
        $data = new Organization();
        $content = View::render('pages/home', [
            'page_title' => $data->title,
            'description' => $data->description
        ]);

        return parent::getPage('Home', $content);
    }
}