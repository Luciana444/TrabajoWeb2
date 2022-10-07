<?php
require_once "./model/VideojuegoModelo.php";
require_once "./view/VideojuegoVista.php";

class VideojuegoController{
    private $model; 
    private $view;

    function __construct(){
        $this->model = new VideojuegoModelo();
        $this->view = new VideojuegoVista();
    }

    function MostrarVideojuegos(){
        $videojuegos = $this->model->GetVideojuegos();
        $this->view->MostrarVideojuegos($videojuegos);
    }

    function Getjuego($videojuego){
        $juego = $this->model->GetVideojuego($videojuego);  
        $this->view->MostrarVideojuego($juego);
    }
}