<?php

namespace App\Service\Connecteur;

class Db
{
    private $password = 'jimmjimm';
    private $login = 'root';
    private $bddname = 'blog_p5';
    private $bddHost = 'localhost';
    protected $bddObject;

    /*
     * Quand j'instancie ma class Db ma fonction __construct s'éxècute automatiquement
     */
    public function __construct()
    {
        // J'execute ma fonction connectdb dans ma classe ($this) et je stocke le retour dans ma variable bddObject
        $this->bddObject = $this->connectdb();
    }

    /*
     * Retourne une instance de PDO servant a se connecter à la db
     */
    protected function connectdb()
    {
        try {
            // Retourne une instance de PDO permettant l accès à la bdd
            return new \PDO('mysql:host='.$this->bddHost.';dbname='.$this->bddname.';charset=utf8', $this->login, $this->password,
            array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        } catch (\Exception $e)
        {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}