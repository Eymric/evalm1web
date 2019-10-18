<?php 

//Chargement des classes
require_once '../vendor/autoload.php';

// importation des classes
use App\API\Core\Router;
use App\API\Core\Container;

// routage
$router = new Router();
// echo '<pre>';var_dump($router->getRoute());echo '</pre>';

// container
$container = new Container();

$controller = $container->get($router->getRoute()['route']['controller']);

// méthode 
$method = $router->getRoute()['route']['method'];
// $controller->{$router->getRoute()['route']['method']}();

//variables d'URL 
$uriVars = $router->getRoute()['uriVars'];

//appel de la méthode
$controller->$method($uriVars);
// var_dump($uriVars);