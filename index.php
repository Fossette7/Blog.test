<?php

//include_once __DIR__.'/include/db-connecteur.php';
include_once __DIR__.'/entity/membre.php';
include_once __DIR__.'/entity/post.php';
include_once __DIR__.'/connecteur/db.php';

$monInstanceDb = new db();
$a = $monInstanceDb->getAllPost();

$toto = $monInstanceDb->getAllMembre();

function addMembre($tableauDeDataMembre)
{
    // add membre
    $membre = new Membre();
    $membre->setEmail($tableauDeDataMembre['email']);
    $membre->setLogin($tableauDeDataMembre['login']);
    $membre->save();
}


addMembre([
    'email' => 'tata@gmail.com',
    'login' => 'pomme'
]);

addMembre([
    'email' => 'membre2@gmail.com',
    'login' => 'membre2'
]);


$membre1 = new Membre();
$membre1->setEmail('tata@gmail.com');
$membre1->setLogin('pomme');
echo $membre1->getLogin();
echo '<br/>';
echo $membre1->getEmail();
echo '<br/>';
echo '<br/>';

$membre2 = new Membre();
$membre2->setEnableAccount(0);

$membre2->setEmail('membre2@gmail.com');
$membre2->setLogin('membre2');
echo $membre2->getLogin();
echo '<br/>';
echo $membre2->getEmail();
echo '<br/>';
echo '<br/>';


function addPost($tableauDePost){
    //add post
    $post = new Post();
    $post->setTitre($tableauDePost['titre']);
    $post->setMembreId($tableauDePost['membre_id']);
    $post->save();
}

addPost([
    'titre' => 'Aventure à Maurice',
    'membre' => 'Hélène',
])
;


