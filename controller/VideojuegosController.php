<?php
require_once "./model/VideojuegosModelo.php";
require_once "./view/VideojuegosVista.php";
require_once "./model/GenerosModelo.php";
require_once "./helpers/AuthHelper.php";

class VideojuegosController{
    private $model; 
    private $view;
    private $generos_model;
    private $authhelper;

    function __construct(){
        $this->model = new VideojuegosModelo();
        $this->view = new VideojuegosVista();
        $this->generos_model = new GenerosModelo();
        $this->authhelper = new AuthHelper();
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
        $genero = $this->generos_model->GetGenero($id_genero);
        $this->view->MostrarVideojuegoPorGenero($videojuegosporgenero,$genero);
    }

    function BorrarVideojuego($id){
        $this->authhelper->checklogin();
        $this->model->EliminarVideojuego($id);
        header("location:" . BASE_URL . "videojuego");
    }

    function AgregarVideojuego(){
        $this->authhelper->checklogin();
        $videojuego = $_POST['videojuego'];
        $fechadelanzamiento = $_POST['fechadelanzamiento'];
        $descripcion = $_POST['descripcion'];
        $caracteristica = $_POST['caracteristica'];
        $id_genero = $_POST['id_genero'];
        if(empty($videojuego) || empty( $fechadelanzamiento) || empty($descripcion) || empty($caracteristica) || empty($id_genero)){
            $this->view->error("debe completar todos los campos");
            die();
        }
        $this->model->AgregarVideojuego($videojuego,$fechadelanzamiento,$descripcion,$caracteristica,$id_genero);
        header("location:" . BASE_URL . "videojuego");
    }

    function EditarVideojuego(){
        $this->authhelper->checklogin();
        $nombre = $_POST['nombre'];
        $fecha_de_lanzamiento = $_POST['fechadelanzamiento'];
        $descripcion = $_POST['descripcion'];
        $caracteristica = $_POST['caracteristica'];
        $id = $_POST['id'];
        if(empty($nombre) || empty( $fecha_de_lanzamiento) || empty($descripcion) || empty($caracteristica) || empty($id)){
            $this->view->error("debe completar todos los campos");
            die();
        }
        $this->model->ActualizarVideojuego($nombre,$fecha_de_lanzamiento,$descripcion,$caracteristica,$id);
        header("location:" . BASE_URL . "videojuego");
    }
}