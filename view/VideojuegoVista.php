<?php
require_once "libreria/smarty-4.2.1/libs/Smarty.class.php";


class VideojuegoVista{
    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function MostrarVideojuegos($videojuegos){
      $this->smarty->assign('titulo',"Generos");
      $this->smarty->assign('videojuegos', $videojuegos);
      $this->smarty->display('templates/tabla_videojuegos.tpl');
  }

  function MostrarVideojuego($juego){
    $this->smarty->assign('juego', $juego);
    $this->smarty->assign('volver', "Volver");
    $this->smarty->display('templates/mostrarjuego.tpl');
  }

  function MostrarVideojuegosPorGenero(){
    $this->smarty->assign('', )
  }
}
