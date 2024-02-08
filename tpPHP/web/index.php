<?php

use models\Model;
use Controllers\UtilisateurController;
use models\Utilisateur;
use models\Objet;
use Controllers\ObjetController;

require __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute(['GET', 'POST'], '/user/register', function () {
        $controller = new Controllers\UtilisateurController();
        return $controller->register();

    });
    $r->addRoute(['GET', 'POST'], '/user/authenticate', function () {
        $controller = new Controllers\UtilisateurController();
        return $controller->authenticate();

    });

    $r->addRoute('GET', '/web/objets/list', ['Controllers\ObjetController', 'list']);


    // ROUTES OBJETS/ALBUMS
    $r->addRoute('GET', '/web/objet/create',['Controllers\ObjetController','create']);

    $r->addRoute(['GET','POST'], '/web/objet/createPost',['Controllers\ObjetController','createPost']);

    $r->addRoute('GET', '/web/objet/insertion',['Controllers\ObjetController','insertion']);

    // ROUTES PISTES

    $r->addRoute(['POST','GET'], '/web/piste/create',['Controllers\PisteController','create']);
    
    // ROUTES ARTISTES

    $r->addRoute(['POST','GET'], '/web/artiste/create',['Controllers\ArtisteController','create']);

    $r->addRoute(['POST','GET'], '/web/artiste/createPost',['Controllers\ArtisteController','createPost']);
    
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);


$routeInfo = $dispatcher->dispatch($httpMethod, $uri);


switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        die('NOT_FOUND');
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        die('Not Allowed');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        print $handler($vars);
        break;
}
