<?php

namespace App\Service\Router;

use App\Controller\About;
use App\Controller\Membre;

class Router
{
    public $requestUri;

    /*
     * Action Executer des l instansiation de la class (new Router() )
     * Cette fonction permet de récupérer tout ce qui se trouve après url de base (url de base = www.blog.test) grace à $_SERVER['REQUEST_URI']
     * J'utilise la fonction substr pour supprimer le premier caractère de la variable $_SERVER['REQUEST_URI'] qui est pour toutes les url / (/, /post, /commentaire)
     * J'associe le résultat dans ma variable de class $requestUri ($this->requestUri = substr($_SERVER['REQUEST_URI'], 1);)
     */
    public function __construct()
    {
        // J'associe une variable à $requestUri
        // On utilise substr pour retirer le premier / de la variable $_SERVER['REQUEST_URI']
        // https://www.php.net/manual/fr/function.substr.php

        $this->requestUri = substr($_SERVER['REQUEST_URI'], 1);
    }

    /*
     * Fonction qui permet d'instancier le bon controller en fonction de la valeur stockée dans $requestUri
     */
    public function getController()
    {
        // Problème avec un slash qui se rajoute alors je fais un explode sur le slash sur ma variable $requestUri dans ma classe qui me retourne un tableau
        // https://www.php.net/manual/fr/function.explode.php
        $explodedUri = explode('/', $this->requestUri);

        // Je vérifie si la valeur de ma variable requestUri est égal à rien
        // Donc ma condition est valide si mon url est égal à: www.blog.test (donc rien après mon url de base)
        if ($this->requestUri === '')
        {
            // J instancie la classe Home et je la stocke dans ma variable $homeController
            $homeController = new \App\Controller\Home();

            // J'affiche le retour de la fonction getIndexPage se trouvant dans la classe Home
            echo $homeController->getIndexPage();
        }
        // Sinon je vérifie si la valeur stockée dans mon tableau $explodedUri à la clé 0 ($explodedUri[0]) est égal à post
        // et que le nombre d'élèment stocké dans mon tableau est égal à 2
        // Donc mon url doit-être égal www.blog.test/post/1 ou www.blog.test/post/2 ou www.blog.test/post/3 ou www.blog.test/post/4 ou ..........
        else if ($explodedUri[0] === 'post' && count($explodedUri) === 2 )
        {
            // J instancie la classe Post et je la stocke dans ma variable $homeController
            $homeController = new \App\Controller\Post();

            // J'affiche le retour de la fonction getOnePostPage se trouvant dans la classe Post et je lui envoie la variable $this->requestUri
            // qui est égal à post/2 ou post/1 ou post/3 ou post/4 ou ........
            echo $homeController->getOnePostPage($this->requestUri);
        }
        // Sinon si ma variable requestUri est égal à: /about alors je rentre dans la condition
        // Donc mon url doit être égal à www.blog.test/about
        else if ( $this->requestUri === 'about'){
            // Afficher la page about
            //je crée une instance de la classe
            $about = new \App\Controller\About();
            echo $about->getAboutPage();

        }
        /*Sinon si ma variable requestUri est égal à: contact alors je rentre dans la condition
        Donc mon url doit être égal à www.blog.test/contact */
        else if ( $this->requestUri === 'contact'){
            //afficher la page contact
            //je créee un instance de la classe Form
            $formpage = new \App\Controller\Form();
            echo $formpage->getFormPage();
        }
        /*Sinon si ma variable requestUri est égal à: new/post alors je rentre dans la condition
        Donc mon url doit être égal à www.blog.test/new/post */
        else if ( $this->requestUri === 'new/post') {
            //afficher la page new post
            //je crée une instance de la classe Post
            $formpage = new \App\Controller\Post();
            echo $formpage->getNewPostFromFormPage();
        }
        /* Je crée l URL pour la page "login"
        Si ma variable requestUri est égal à : /login alors je rentre dans la condition et j'affiche
        mon url doit être égal à www.blog.test/login */
        else if ($this->requestUri==='login'){
            //afficher la page de connexion
            $displayMemberPage = new \App\Controller\Membre();
            echo $displayMemberPage->getMembrePage();

        }

        /*Ajouter un commentaire :
        Sinon si ma variable requestUri est égal à: /comment alors je rentre dans la condition
        Donc mon url doit être égal à www.blog.test/comment */
        // Si aucune des conditions décrites, j'execute le code suivant:
        else {
            // J instancie la classe Post et je la stocke dans ma variable $homeController
            $homeController = new \App\Controller\Home();
            // J'affiche le retour de la fonction getIndexPage se trouvant dans la classe Home
            echo $homeController->getIndexPage();
            dump($this->requestUri);
        }
    }
}