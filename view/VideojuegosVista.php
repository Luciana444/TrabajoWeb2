<?php
require_once "libreria/smarty-4.2.1/libs/Smarty.class.php";


class VideojuegosVista{
    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function MostrarVideojuegos($videojuegos, $generos){
      $this->smarty->assign('titulo',"Videojuegos");
      $this->smarty->assign('seccion', 'videojuegos');
      $this->smarty->assign('videojuegos', $videojuegos);
      $this->smarty->assign('generos',$generos);
      $this->smarty->assign('inicio',"inicio");
      $this->smarty->display('templates/tabla_videojuegos.tpl');
  }

  function MostrarVideojuego($juego){
    $this->smarty->assign('juego', $juego);
    $this->smarty->assign('volver', "Volver");
    $this->smarty->display('templates/mostrarjuego.tpl');
  }

  function MostrarVideojuegoPorGenero($videojuegosporgenero,$genero){
    $this->smarty->assign('titulo',$genero->genero);
    $this->smarty->assign('seccion','genero');
    $this->smarty->assign('inicio',"inicio");
    $this->smarty->assign('videojuegos', $videojuegosporgenero);
    $this->smarty->display('templates/tabla_videojuegos.tpl');
  } 

    function error($error){
      $this->smarty->assign('error', $error);
      $this->smarty->assign('volver', "Volver");
      $this->smarty->display('templates/error.tpl');
  }
}
