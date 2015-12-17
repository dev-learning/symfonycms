<?php

require_once(__DIR__ . '/vendor/autoload.php');
use Route\Route;

$route = new Route();

require_once (__DIR__ . '/src/Modules/' . $route->getModule() . '/' . $route->getController() . '.php');


$controller = 'Modules\\' . $route->getModule() . '\\' . $route->getController();
$controllerObject = new $controller;
$params = $route->getParams();

if (empty($params))
{
    $controllerObject->{$route->getAction()}();
}
else
{
    $controllerObject->{$route->getAction()}($params);
}
