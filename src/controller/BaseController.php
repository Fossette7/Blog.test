<?php

namespace App\Controller;

class BaseController {
    protected $loader;
    protected $twig;

    /*
     * Quand j'instancie une classe Controller (Home, Membre, Post) ma fonction __construct s'éxècute automatiquement
     */
    public function __construct()
    {
        /* Je créer une nouvelle instance de Twig_Loader_Filesystem et je met en argument le dossier ou se trouve tous mes templates et je stocke cette instance dans ma variable $loader*/
        // https://twig.symfony.com/doc/2.x/api.html
        $this->loader = new \Twig_Loader_Filesystem(__DIR__.'/../view');

        /* Je créer une nouvelle instance de Twig_Environment et j'envoie en argument 1 le $loader et en argument 2 un tableau de configuration indiquant que l'on ne veut pas de cache et que l'on est en debug*/
        $this->twig = new \Twig_Environment($this->loader, [
            'cache' => false,
            'debug' => true,
        ]);

        // Ajout de l'extension Debug dans mon twig
        // https://twig.symfony.com/doc/2.x/functions/dump.html
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());

        // Ajout de l'extension text dans mon twig, notamment pour le TRUNCATE
        // https://twig-extensions.readthedocs.io/en/latest/text.html
        $this->twig->addExtension(new \Twig_Extensions_Extension_Text());
    }
}