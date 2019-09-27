<?php

namespace App\Controller;


class Post extends BaseController
{
    public function getOnePostPage($routerRequestUri)
    {
        $myNewVar = explode('/', $routerRequestUri);
        $post = new \App\Entity\Post();
        $postByIdReturn = $post->getPostById($myNewVar[1]);
        return $this->twig->render('post.twig',['onePost' => $postByIdReturn[0]]);
    }


}