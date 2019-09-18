<?php
require ('../vendor/autoload.php');
use Diversoft\Route;
phpinfo();
$route = new Route();
$controlador = 'Diversoft\\Controller\\'.$route->getControlador().'Controller';
$metodo = $route->getMetodo();
echo $controlador;
$controller = new $controlador();
$controller->$metodo($route->getIndice());
echo '<pre>';
print_r($route->getUri());
print_r($route->getControlador().'<br>');
print_r($route->getMetodo().'<br>');
print_r($route->getIndice().'<br>');
echo '</pre>';