<?php
namespace App\Controller;

//J'étends le controller BaseController qui contient l'attribut twig permettant d'afficher le template
//je crée la classe About
class About extends BaseController
{
    public function getAboutPage()
        //j'execute la fonction render de Twig, possible puisque la classe About est une extends de BaseController
    {
        return $this->twig->render('about.twig');
    }
}