<?php

require 'vendor/autoload.php';

$router = new App\Service\Router\Router();
echo $router->getController();

