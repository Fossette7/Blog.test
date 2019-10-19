<?php

namespace App\Entity;

class Form
{
    public function traitementPost() {
        $post = new \App\Entity\Post();
        $memberId = $_POST['membre_Id'];
        $title = $_POST['titre'];
        $content = $_POST['contenu'];
        $post->setNewpost($title,$content,$memberId);
    }
}
