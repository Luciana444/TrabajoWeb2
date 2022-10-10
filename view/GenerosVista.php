<?php
require_once "libreria/smarty-4.2.1/libs/Smarty.class.php";

class GenerosVista{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function MostrarGeneros($generos){
        $this->smarty->assign('titulo',"Generos");
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/tabla_generos.tpl');
    }   

    function MostrarVideojuegoPorGenero($videojuegosporgenero){
        $this->smarty->assign('videojuegosporgenero',$videojuegosporgenero);
        $this->smarty->assign('volver','Volver');
        $this->smarty->display('templates/videojuegosporgenero.tpl');
    }
}