<?php


namespace Diversoft;


abstract class Controller
{
    public function __construct()
    {
        echo "<hr>Estamos instanciando el constructor<br><hr>";
    }

    abstract public function index();

}