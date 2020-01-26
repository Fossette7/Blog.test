<?php

namespace App\Controller;

class Membre extends BaseController {

    public function getMembrePage(){
        return $this->twig->render('login.twig');
    }

    public function getAdminPage(){
        //retourne une page avec l'accès Admin
        return $this->twig->render('admin.twig');
    }
}