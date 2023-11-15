<?php

require '../vendor/autoload.php';

use M2i\Mvc\App;

$app = new App();
// Ligne utile que si on ne fait pas "php -S ..."
// $app->setBasePath('/poo/06-mvc/public');

// Toutes les routes du site
$app->addRoutes([
    ['GET', '/', 'HomeController@index'],

    ['GET', '/livres', 'BookController@index'],
    ['GET', '/livre/[i:id]', 'BookController@show'],
    ['GET|POST', '/livre/nouveau', 'BookController@create'],
    ['GET|POST', '/livre/[i:id]/modifier', 'BookController@edit'],
    ['GET', '/livre/[i:id]/supprimer', 'BookController@delete'],

    ['GET|POST', '/login', 'AuthController@login'],
    ['GET|POST', '/register', 'AuthController@register'],
    ['GET', '/logout', 'AuthController@logout'],
]);

// Lancer l'application
$app->run();
