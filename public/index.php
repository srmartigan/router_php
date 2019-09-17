<?php

use Diversoft\Route;


require ('../src/Route.php');
require ('../src/HomeController.php');


$route = new Route();
$controlador = 'Diversoft\\'.$route->getControlador().'Controller';
echo $controlador;
$controller = new $controlador();
$controller->index();
echo '<pre>';
print_r($route->getUri());
print_r($route->getControlador().'<br>');
print_r($route->getMetodo().'<br>');
print_r($route->getIndice().'<br>');


echo '</pre>';