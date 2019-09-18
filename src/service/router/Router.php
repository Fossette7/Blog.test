<?php

namespace App\Service\Router;

class Router
{
    public $requestUri;

    /*
     * Action Executer des l instansation de la class (new Router() )
     */
    public function __construct()
    {
        // J'associe une variable à $requestUri
        // On utilise substr pour retirer le premier / de la variable $_SERVER['REQUEST_URI']
        // https://www.php.net/manual/fr/function.substr.php
        $this->requestUri = substr($_SERVER['REQUEST_URI'], 1);
    }

    public function getController()
    {
        if ($this->requestUri === '')
        {
            $homeController = new \App\Controller\Home();
            echo $homeController->getIndexPage();
        } else if ($this->requestUri === 'about')
        {
            die ('add new about controller and view');
        }
        else {
            echo 'Aucune route n est défini pour l url suivante<br/>';
            echo '<pre>';
            // J'affiche la donnée associée à $requestUri
            var_dump($this->requestUri);
            echo '</pre>';
        }
    }

    public function whatITryToAccess()
    {
        echo '<pre>';
        // J'affiche la donnée associée à $requestUri
        var_dump($this->requestUri);
        echo '</pre>';
    }
}