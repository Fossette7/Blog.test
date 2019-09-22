<?php

namespace App\Entity;

class Commentaire extends \App\Service\Connecteur\Db
{
    /** @var string contain comment */

    private $id;
    private $texte;
    private $membreId;
    private $postId;
    private $dateCreation;


    public function __toString()
    {
        $text =
            "===========================<br/>
            Ceci est le texte $this->texte<br/>
            Le membre est $this->membreId<br/>
            Ceci est le post $this->postId<br/>
            La date de création est $this->dateCreation<br/>";
        return $text;
    }

    public function getId(){
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    /**
     * @return mixed
     */
    public function getMembreId()
    {
        return $this->membreId;
    }

    /**
     * @param mixed $membreId
     */
    public function setMembreId($membreId)
    {
        $this->membreId = $membreId;
    }

    public function getAllComment($idFromPost){
        $reponse = $this->bddObject->query('SELECT * FROM Commentaire WHERE post_id='.$idFromPost);
        $allComment = $reponse->fetchAll();
        return $allComment;
    }

}