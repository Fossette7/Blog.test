<?php

namespace App\Controller;

class Home extends BaseController
{
    public function getIndexPage()
    {
        $mypost = new \App\Entity\Post();
        $allMyIndexPost = $mypost->getAllPost();
        var_dump($allMyIndexPost);
        die();
        return $this->twig->render('index.twig', ['name' => 'Brice']);
    }

    public function getMyCustomPage(){
        return 'Je suis une custom page';
    }
}