<?php
require_once "./model/VideojuegosModelo.php";
require_once "./view/VideojuegosVista.php";
require_once "./model/GenerosModelo.php";

class VideojuegosController{
    private $model; 
    private $view;
    private $generos_model;

    function __construct(){
        $this->model = new VideojuegosModelo();
        $this->view = new VideojuegosVista();
        $this->generos_model = new GenerosModelo();
    }

    function MostrarVideojuegos(){
        $videojuegos = $this->model->GetVideojuegos();
        $generos = $this->generos_model->GetGeneros();
        $this->view->MostrarVideojuegos($videojuegos,$generos);
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
        $fechadelanzamiento = $_POST['fechadelanzamiento'];
        $descripcion = $_POST['descripcion'];
        $caracteristica = $_POST['caracteristica'];
        $id_genero = $_POST['id_genero'];
        $this->model->AgregarVideojuego($videojuego,$fechadelanzamiento,$descripcion,$caracteristica,$id_genero);
        header("location:" . BASE_URL . "videojuego");
    }

    function EditarVideojuego(){
        $nombre = $_POST['nombre'];
        $fecha_de_lanzamiento = $_POST['fechadelanzamiento'];
        $descripcion = $_POST['descripcion'];
        $caracteristica = $_POST['caracteristica'];
        $id = $_POST['id'];
        $this->model->ActualizarVideojuego($nombre,$fecha_de_lanzamiento,$descripcion,$caracteristica,$id);
        header("location:" . BASE_URL . "videojuego");
    }
}