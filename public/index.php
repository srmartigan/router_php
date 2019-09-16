<?php

use Diversoft\Route;

require ('../src/Route.php');

$route = new Route();

echo '<pre>';
print_r($route->getUri());
print_r($route->getControlador().'<br>');
print_r($route->getMetodo().'<br>');
print_r($route->getIndice().'<br>');
echo '</pre>';