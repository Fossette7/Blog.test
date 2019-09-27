<?php

namespace App\controller;

class Form extends BaseController
{
    public function getFormPage()
    {
        echo 'je suis la Form page';
        echo $this->twig->render('form.twig');
    }
}