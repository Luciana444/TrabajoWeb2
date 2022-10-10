<?php
require_once "./model/GenerosModelo.php";
require_once "./view/GenerosVista.php";
require_once "./helpers/AdministradorHelper.php";

class GenerosController{
    private $model; 
    private $view;

    function __construct(){
        $this->model = new GenerosModelo();
        $this->view = new GenerosVista();

        $authHelper = new AuthHelper();
        $authHelper->VerificarLogueado();   
    }

    function MostrarGeneros(){
       $generos = $this->model->GetGeneros();
       $this->view->MostrarGeneros($generos);
    }

    function VideojuegosPorGenero($genero){
        $videojuegosporgenero = $this->model->GetVideojuegos($genero);
        $this->view->MostrarVideojuegoPorGenero($videojuegosporgenero);
    }
}