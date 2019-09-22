<?php

namespace App\Controller;

class BaseController {
    protected $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new \Twig_Loader_Filesystem(__DIR__.'/../view');
        $this->twig = new \Twig_Environment($this->loader, [
           'cache' => false,
            'debug' => true,
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        $this->twig->addExtension(new \Twig_Extensions_Extension_Text());
        //$this->twig->addExtension(new \Twig_Extensions_Extension_Text());
    }
}