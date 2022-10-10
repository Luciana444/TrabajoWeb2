<?php
require_once "libreria/smarty-4.2.1/libs/Smarty.class.php";;

class AdministradorVista {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function MostrarFormulario($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/login.tpl');
    }
}