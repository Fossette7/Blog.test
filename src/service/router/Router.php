<?php

namespace App\Service\Router;

class Router
{
    private $requestUri;

    /*
     * Action Executer des l instansation de la class (new Router() )
     */
    public function __construct()
    {
        // J'associe une variable a $requestUri
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }

    public function getController()
    {
        // On veux accèder a la page Home
        if ($this->requestUri === '/')
        {
            $homeController = new \App\Controller\Home();
            return $homeController->getIndexPage();
        } else if ($this->requestUri === '/post')
        {
            $postController = new \App\Controller\Post();
            return $postController->getPostPage();
        } else {
            echo 'Aucune route n est défini pour l url suivante<br/>';
            echo '<pre>';
            // J'affiche la donnée associé à $requestUri
            var_dump($this->requestUri);
            echo '</pre>';
        }
    }

    public function whatITryToAccess()
    {
        echo '<pre>';
        // J'affiche la donnée associé à $requestUri
        var_dump($this->requestUri);
        echo '</pre>';
    }
}