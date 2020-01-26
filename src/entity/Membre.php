<?php

namespace App\Entity;

class Membre extends \App\Service\Connecteur\Db
{
    /** @var string contain Member Name */

    private $_id;
    private $_login;
    private $_password;
    private $_email;
    private $_nom;
    private $_prenom;
    private $_enableAccount;

    public function __toString()
    {
        $text =
            '================================<br/>' .
            'Le login est ' . $this->_login . '<br>' .
            'Le mdp est ' . $this->_password . '<br>' .
            'Le email est ' . $this->_email . '<br>' .
            'Le nom est ' . $this->_nom . '<br>' .
            'Le prenom est ' . $this->_prenom . '<br>' .
            '================================<br/><br/><br/><br/>';

        return $text;
    }

    public function getId(){
        return $this->_id;
    }

    public function setLogin($loginVal)
    {
        $this->_login = $loginVal;
    }

    public function getLogin()
    {
        return $this->_login;
    }

    public function setPassword($mdp)
    {
        $this->_password = $mdp;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setEmail($emailVal)
    {
        $this->_email = $emailVal;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setNom($nomVal1)
    {
        $this->_nom = $nomVal1;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setPrenom($prenomVal1)
    {
        $this->_prenom = $prenomVal1;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setEnableAccount($enableAccount)
    {
        $this->_enableAccount = $enableAccount;
    }

    public function getEnableAccount()
    {
        return $this->_enableAccount;
    }

    public function activeAccount()
    {
        $this->_enableAccount = 1;
    }

    public function disableAccount()
    {
        $this->_enableAccount = 0;
    }

    public function save(){
        echo 'Votre membre est sauvegardé<br/><br/>';
        echo $this->__toString();
    }

    public function getAllMember(){
        $reponse = $this->bddObject->query('SELECT * FROM Membre');
        $allMember= $reponse->fetchAll();
        return $allMember;

    }

    public function getMemberById($id){
        $reponse = $this->bddObject->query('SELECT * FROM Membre WHERE id=($id)');
        $memberById= $reponse->fetchAll();
        return $memberById;
    }

}