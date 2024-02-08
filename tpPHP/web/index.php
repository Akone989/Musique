<?php
require_once("./models/Objet.php");
require_once("./models/Utilisateur.php");
require_once("./models/Model.php");
require_once ("./controllers/UtilisateurController.php");
require_once ("./controllers/ObjetController.php");
use models\Model;
use Controllers\UtilisateurController;
use models\Utilisateur;
use models\Objet;
use Controllers\ObjetController;

if (file_exists('./vendor/autoload.php')) {
    require './vendor/autoload.php';
} else {
    echo "erreur";
}

require './vendor/autoload.php';

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
