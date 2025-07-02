<?php

require_once 'Controller/Router.php'; // Charge le router

include_once 'Views/header.html.php'; // Inclut le header

$router = new Router(); // Crée une instance du routeur
include_once $router->getRequest();




// var_dump($router); // Affiche les informations du routeur

include_once 'Views/footer.html.php'; // Inclut le footer