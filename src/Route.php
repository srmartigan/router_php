<?php


namespace Diversoft;


class Route
{
    private $uri;
    private $controlador;
    private $metodo;
    private $indice;

    public function __construct()
    {
        $this->setUri();
        $this->setControlador();
        $this->setMetodo();
        $this->setIndice();
    }


    public function getUri()
    {
        return $this->uri;
    }


    public function setUri()
    {
        $this->uri = explode('/', $_SERVER['REQUEST_URI']);
    }


    public function getControlador()
    {
        return $this->controlador;
    }


    public function setControlador()
    {
        $this->controlador = $this->uri[3] === '' ? 'home' : $this->uri[3];
    }


    public function getMetodo()
    {
        return $this->metodo;
    }


    public function setMetodo()
    {
        $this->metodo = !empty($this->uri[2]) ? $this->uri[2] : 'exec';
    }


    public function getIndice()
    {
        return $this->indice;
    }


    public function setIndice()
    {
        $this->indice = !empty($this->uri[3]) ? $this->uri[3] : '';
    }

}