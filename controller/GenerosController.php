<?php
require_once "./model/GenerosModelo.php";
require_once "./view/GenerosVista.php";
require_once "./model/VideojuegosModelo.php";
require_once "./helpers/AuthHelper.php";

class GenerosController{
    private $model; 
    private $view;
    private $videojuegos_model;
    private $authhelper;

    function __construct(){
        $this->model = new GenerosModelo();
        $this->view = new GenerosVista();  
        $this->videojuegos_model = new VideojuegosModelo();
        $this->authhelper = new AuthHelper();
    }

    function MostrarGeneros(){
       $generos = $this->model->GetGeneros();
       $videojuegos = $this->videojuegos_model->GetVideojuegos();
       $this->view->MostrarGeneros($generos,$videojuegos);
    }

    function AgregarGenero(){
        $this->authhelper->checklogin();
        if(empty($_POST['genero'])){
            $this->view->error("debe completar todos los campos");
            die();
        }
        $genero = $_POST['genero'];
        $this->model->AgregarGenero($genero);
        header('location:' . BASE_URL);
    
    }

    function BorrarGenero($id_genero){
        $this->authhelper->checklogin();
        $juegos = $this->videojuegos_model->ConseguirVideojuegosPorGenero($id_genero);
        if(!empty($juegos)){
        $this->view->error("No se puede eliminar el genero ya que contiene juegos dentro, eliminelos y vuelva a realizar la accion");
        die();
        }
        $this->model->EliminarGenero($id_genero);
        header("Location: " . BASE_URL);
        }

    function EditarGenero(){
        $this->authhelper->checklogin();
        if(empty($_POST['genero'])){
            $this->view->error("debe completar todos los campos");
            die();
        }
        $genero = $_POST['genero'];
        $id_genero = $_POST['id_genero'];
        $this->model->ActualizarGenero($genero, $id_genero);
        header("Location: " . BASE_URL);
    }
}
