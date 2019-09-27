<?php

namespace App\Entity;

class Commentaire extends \App\Service\Connecteur\Db
{
    /** @var string contain comment */

    private $_id;
    private $_texte;
    private $_membreId;
    private $_postId;
    private $_dateCreation;


    public function __toString()
    {
        $text =
            "===========================<br/>
            Ceci est le texte $this->_texte<br/>
            Le membre est $this->_membreId<br/>
            Ceci est le post $this->_postId<br/>
            La date de création est $this->_dateCreation<br/>";
        return $text;
    }

    public function getId(){
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->_texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->_texte = $texte;
    }

    /**
     * @return mixed
     */
    public function getMembreId()
    {
        return $this->_membreId;
    }

    /**
     * @param mixed $membreId
     */
    public function setMembreId($membreId)
    {
        $this->_membreId = $membreId;
    }

    public function getAllComment($idFromPost){
        $reponse = $this->bddObject->query('SELECT * FROM Commentaire WHERE post_id='.$idFromPost);
        $allComment = $reponse->fetchAll();
        return $allComment;
    }

}