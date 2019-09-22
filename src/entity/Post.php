<?php

namespace App\Entity;

class Post extends \App\Service\Connecteur\Db
{
    /** @var string contain Post */
    private $id;
    private $titre;
    private $membreId;
    private $contenu;
    private $dateCreation;
    private $dateModification;

    public function __toString()
    {
        $text =
            "=========================================================<br/>
            le titre est $this->titre <br/> 
            le membre est $this->membreId<br/>
            le contenu est $this->contenu<br/>
            la date de création est $this->dateCreation<br/>
            la date de modification est $this->dateModification<br/> 
            ==========================================================";

        return $text;
    }

    public function getId(){
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getMembreId()
    {
        return $this->membre_id;
    }

    /**
     * @param mixed $membre_id
     */
    public function setMembreId($membre_id)
    {
        $this->membre_id = $membre_id;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->date_modification;
    }

    /**
     * @param mixed $date_modification
     */
    public function setDateModification($date_modification)
    {
        $this->date_modification = $date_modification;
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