<?php
// Autoload qui charge toutes les classes que va utiliser par la suite ici l'autoload te charge le router + entitée
require __DIR__.'/vendor/autoload.php';

// On initialise la classe Router par son namespace
// Lors de l'initialisation la méthode __construct est éxécuter
$myRouter = new \App\Service\Router\Router();
$myRouter->getController();



/*
$reybeka = new App\Test\Humain('reybeka', 'peyrat',10);

echo '<br/>';
echo '<br/>';

var_dump($reybeka->firstName);
echo '<br/>';
var_dump($reybeka->lastName);
echo '<br/>';

var_dump($reybeka->age);
echo '<br/>';
$reybeka->direBonjour();

echo '<br/>';
 */