<?php

namespace App\Entity;

class Comment extends \App\Service\Connecteur\Db
{
    /** @var string contain comment */

    private $_id; //type string
    private $_texte; // comment type text
    private $_membreId; //type int
    private $_postId;
    private $_dateCreation;

    protected $approved;

    public function __construct()
    {
        $this->setdateCreation();
        //$this->setUpdated();
        //$this->setApproved(true);
        parent::__construct();
    }


    public function setdateCreation(){

    }

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
    // get all comments
    public function getAllComment($idFromPost){
        $reponse = $this->bddObject->query("SELECT * FROM Commentaire WHERE post_id =".$idFromPost);
        $allComment = $reponse->fetchAll();
        return $allComment;
    }

    // add a new comment, check number of parameter added
    public function setNewComment($t,$c,$u)
    {
        /* $response = $this->bddObject->query("INSERT INTO Commentaire (texte, post_id, membre_id) VALUES (:texte, :membre_id, :post_id)"); */
        $newComment = $this->bddObject->prepare("INSERT INTO Commentaire (texte, post_id, membre_id) VALUES (:texte, :membre_id, :post_id)");
        //passer paramètre en variable pas en string
        //$test=1;
        $newComment->bindParam(':texte',$t);
        $newComment->bindParam(':membre_id',$u);
        $newComment->bindParam(':post_id',$c);
        $newComment->execute();
    }

}