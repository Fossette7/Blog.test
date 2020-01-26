<?php

// Autoload qui charge toutes les classes que va utiliser par la suite ici l'autoload charge le router + entité
require __DIR__.'/vendor/autoload.php';
// On initialise la classe Router par son namespace
// Lors de l'initialisation la méthode __construct est executé
$myRouter = new \App\Service\Router\Router();
$myRouter->getController();


