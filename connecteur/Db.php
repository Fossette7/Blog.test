<?php

class db
{
    // Set mdp, login, bdd name, bdd_host to bdd on private val
    private $password = 'jimmjimm';
    private $login = 'root';
    private $bddname = 'blog_p5';
    private $bddHost = 'localhost';
    private $bddObject;

    public function __construct()
    {
        $this->bddObject = $this->connectdb();
    }

    protected function connectdb()
    {
        try {
                return new PDO('mysql:host='.$this->bddHost.';dbname='.$this->bddname.';charset=utf8', $this->login, $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e)
        {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function getAllPost(){
        $reponse = $this->bddObject->query('SELECT * FROM Post');
        $allPost = $reponse->fetchAll();
        return $allPost;
    }

    public function getAllMembre(){
        $bdd = $this->connectdb();
    }

    public function getPostById($id){

    }


    // Set function getMembreById.
}