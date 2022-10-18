<?php
require_once "./model/GenerosModelo.php";
require_once "./view/GenerosVista.php";
require_once "./model/VideojuegosModelo.php";

class GenerosController{
    private $model; 
    private $view;
    private $videojuegos_model;

    function __construct(){
        $this->model = new GenerosModelo();
        $this->view = new GenerosVista();  
        $this->videojuegos_model = new VideojuegosModelo();
    }

    function MostrarGeneros(){
       $generos = $this->model->GetGeneros();
       $videojuegos = $this->videojuegos_model->GetVideojuegos();
       $this->view->MostrarGeneros($generos,$videojuegos);
    }

    function AgregarGenero(){
        $genero = $_POST['genero'];
        $this->model->AgregarGenero($genero);
        header('location:' . BASE_URL);
    }

    function BorrarGenero($id_genero){
        $this->view->error("No se puede eliminar el genero ya que contiene juegos dentro, eliminelos y vuelva a realizar la accion");
        $this->model->EliminarGenero($id_genero);
        header("location:" . BASE_URL);
        }
    }

    function EditarGenero(){
        $genero = $_POST['genero'];
        $id_genero = $_POST['id_genero'];
        $this->model->ActualizarGenero($genero, $id_genero);
        header("location:" . BASE_URL);
        }


