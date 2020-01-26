<?php

namespace App\Controller;

/*
 * J'étends le controller BaseConstroller qui contient l'attribut twig (stocké dans baseController) permettant d'afficher un template
 */
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

    public function getPostPage(){

    }
}