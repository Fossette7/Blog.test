<?php

namespace App\Entity;

class Post extends \App\Service\Connecteur\Db
{
    /** @var string contain Post */
    private $_id;
    private $_titre;
    private $_membreId;
    private $_contenu;
    private $_dateCreation;
    private $_dateDeMiseAJour;

    public function __toString()
    {
        $text =
            "=========================================================<br/>
            le titre est $this->_titre <br/> 
            le membre est $this->_membreId<br/>
            le contenu est $this->_contenu<br/>
            la date de création est $this->_dateCreation<br/>
            la date de modification est $this->_dateDeMiseAJour<br/> 
            ==========================================================";

        return $text;
    }

    public function getId(){
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getMembreId()
    {
        return $this->_membreId;
    }

    /**
     * @param mixed $membre_id
     */
    public function setMembreId($membre_id)
    {
        $this->_membreId = $membre_id;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->_contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->_contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->_dateCreation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->_dateCreation = $date_creation;
        dump($date_creation);
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->_dateDeMiseAJour;
    }

    /**
     * @param mixed $dateDeMiseAJour
     */
    public function setDateDeMiseAJour($dateDeMiseAJour)
    {
        $this->_dateDeMiseAJour = $dateDeMiseAJour;
    }

    public function save(){
        echo 'Votre post est sauvegardé<br/><br/>';
        echo $this->__toString();
    }

    //$Member = new Membre;

    public function getAllPost(){
        $reponse = $this->bddObject->query('SELECT * FROM Post');
        $allPost = $reponse->fetchAll();
        return $allPost;
    }

    public function getPostById($idFromPost){
        $reponse = $this->bddObject->query('SELECT * FROM Post WHERE id='.$idFromPost);
        $onePost = $reponse->fetchAll();
        return $onePost;
    }


}