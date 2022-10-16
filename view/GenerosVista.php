<?php
require_once "libreria/smarty-4.2.1/libs/Smarty.class.php";

class GenerosVista{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function MostrarGeneros($generos,$videojuegos){
        $this->smarty->assign('titulo',"Generos");
        $this->smarty->assign('generos', $generos); 
        $this->smarty->assign('videojuegos', $videojuegos);
        $this->smarty->display('templates/tabla_generos.tpl');
    }   

    function error($error){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('volver', "Volver");
        $this->smarty->display('templates/error.tpl');
    }
}