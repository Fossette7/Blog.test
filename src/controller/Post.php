<?php

namespace App\Controller;


class Post extends BaseController
{
    //Display post by his Id
    public function getOnePostPage($routerRequestUri)
    {
        $myNewVar = explode('/', $routerRequestUri);
        $post = new \App\Entity\Post();
        $myPost = $post->getPostById($myNewVar[1]);

        // Add instance of comment
        $comment = new \App\Entity\Comment();
        $commentByIdReturn = $comment->getAllComment($myNewVar[1]);
        //si on recupère des données pour un nouveau commentaire
        if (!empty($_POST['texte']) && !empty($_POST['post_id']) ){
            $texte = $_POST['commentaire'];
            $myNewVar = $_POST['postId'];
        }
        // Add comments on the render page (view page)
        return $this->twig->render('post.twig',['onePost' => $myPost, 'comments' => $commentByIdReturn ]);

    }

    public function getNewPostFromFormPage() {

        //on vérifie que dans mon array[$_Post], il y a des données remplies
        if(!empty($_POST['membre_Id']) && !empty($_POST['contenu']) && !empty($_POST['titre']) ){
            //$memberId = $_POST['membre_Id'];
            $memberId = 1;
            $title = $_POST['titre'];
            $content = $_POST['contenu'];

            $post = new \App\Entity\Post();
            $post->setNewpost($title,$content,$memberId);
        }
        return $this->twig->render('newPost.twig');
    }

}