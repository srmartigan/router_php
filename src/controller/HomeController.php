<?php


namespace Diversoft\Controller;
use Diversoft\Controller;

class HomeController extends Controller
{

    public function index()
    {
        // TODO: Implement index() method.
        echo "Estamos en el metodo index del controlador Home <br><hr>";
    }
    public function lista($indice = '')
    {
        // TODO: Implement index() method.
        if ($indice == '') {
            echo "Estamos en el metodo list del controlador Home <br><hr>";
        }
        if ($indice == '1') {
            echo "Estamos en el metodo lista numero 1 controlador Home <br><hr>";
        }
        if ($indice == '2') {
            echo "Estamos en el metodo lista numero 2 controlador Home <br><hr>";
        }

    }
}