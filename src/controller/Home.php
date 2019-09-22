<?php

namespace App\Controller;

class Home extends BaseController
{
    public function getIndexPage()
    {
        $mypost = new \App\Entity\Post();
        $allMyIndexPost = $mypost->getAllPost();

        return $this->twig->render('index.twig', ['lesPosts' => $allMyIndexPost]);
    }

    public function getMyCustomPage(){
        return 'Je suis une custom page';
    }
}