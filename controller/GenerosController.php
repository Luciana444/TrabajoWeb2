<?php
require_once "./model/GenerosModelo.php";
require_once "./view/GenerosVista.php";

class GenerosController{
    private $model; 
    private $view;

    function __construct(){
        $this->model = new GenerosModelo();
        $this->view = new GenerosVista();
    }

    function MostrarGeneros(){
       $generos = $this->model->GetGeneros();
       $this->view->MostrarGeneros($generos);
    }

    function VideojuegosByGenre($genero){
        $videojuegosporgenero = $this->model->GetGenero($genero);
        $this->view->MostrarVideojuegoPorGenero($videojuegosporgenero);
    }
}