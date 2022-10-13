<?php
require_once "./model/VideojuegoModelo.php";
require_once "./view/VideojuegoVista.php";
require_once "./helpers/AdministradorHelper.php";

class VideojuegoController{
    private $model; 
    private $view;

    function __construct(){
        $this->model = new VideojuegoModelo();
        $this->view = new VideojuegoVista();

        $authHelper = new AuthHelper();
        $authHelper->VerificarLogueado();
    }

    function MostrarVideojuegos(){
        $videojuegos = $this->model->GetVideojuegos();
        $this->view->MostrarVideojuegos($videojuegos);
    }

    function Getjuego($videojuego){
        $juego = $this->model->GetVideojuego($videojuego);  
        $this->view->MostrarVideojuego($juego);
    }

    function VideojuegosPorGenero($id_genero){
        $videojuegosporgenero = $this->model->ConseguirVideojuegosPorGenero($id_genero);
        $this->view->MostrarVideojuegoPorGenero($videojuegosporgenero);
    }

    function BorrarVideojuego($id){
        $this->model->EliminarVideojuego($id);
        header("location:" . BASE_URL . "videojuego");
    }

    function AgregarVideojuego(){
        $videojuego = $_POST['videojuego'];
        $this->model->AgregarVideojuego($videojuego);
        header("location:" . BASE_URL . "videojuego");
    }
}