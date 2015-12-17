<?php

require_once(__DIR__ . '/vendor/autoload.php');
use Route\Route;

$route = new Route();

require_once (__DIR__ . '/src/Modules/' . $route->getModule() . '/' . $route->getController() . '.php');


$controller = 'Modules\\' . $route->getModule() . '\\' . $route->getController();
$controllerObject = new $controller;
if (empty($route->getParams()))
{
    $controllerObject->{$route->getAction()}();
}
else
{
    $controllerObject->{$route->getAction($route->getParams())}();
}
