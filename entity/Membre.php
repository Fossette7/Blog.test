<?php

class Membre
{

    private $id;
    private $login;
    private $password;
    private $email;
    private $nom;
    private $prenom;
    private $enableAccount;

    public function __toString()
    {
        $text =
            '================================<br/>' .
            'Le login est ' . $this->login . '<br>' .
            'Le mdp est ' . $this->password . '<br>' .
            'Le email est ' . $this->email . '<br>' .
            'Le nom est ' . $this->nom . '<br>' .
            'Le prenom est ' . $this->prenom . '<br>' .
            '================================<br/><br/><br/><br/>';

        return $text;
    }

    public function getId(){
        return $this->id;
    }

    public function setLogin($loginVal)
    {
        $this->login = $loginVal;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setPassword($mdp)
    {
        $this->password = $mdp;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($emailVal)
    {
        $this->email = $emailVal;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNom($nomVal1)
    {
        $this->nom = $nomVal1;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenomVal1)
    {
        $this->prenom = $prenomVal1;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setEnableAccount($enableAccount)
    {
        $this->enableAccount = $enableAccount;
    }

    public function getEnableAccount()
    {
        return $this->enableAccount;
    }

    public function activeAccount()
    {
        $this->enableAccount = 1;
    }

    public function disableAccount()
    {
        $this->enableAccount = 0;
    }

    public function save(){
        echo 'Votre membre est sauvegardé<br/><br/>';
        echo $this->__toString();
    }
}