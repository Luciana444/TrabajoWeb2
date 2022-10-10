<?php
require_once "./controller/GenerosController.php";
require_once "./controller/VideojuegoController.php";
require_once './controller/AdministradorController.php';

define("BASE_URL", "//".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"])."/");

$action = 'index';

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'ingresar':
        $controladoradministrador = new AdministradorController();
        $controladoradministrador->MostrarFormulario();
        break;
    case 'validar':
        $controladoradministrador = new AdministradorController();
        $controladoradministrador->ValidarUsuario();
        break;
    case 'cerrarsesion':
        $controladoradministrador = new AdministradorController();
        $controladoradministrador->cerrarsesion();
        break;
    case 'index':
        $controllergeneros = new GenerosController();
        $controllergeneros->MostrarGeneros();
        break;
    case 'videojuego':
        $controllervideojuegos = new VideojuegoController();
        $controllervideojuegos->MostrarVideojuegos();
        break;
    case 'detallejuego':
        $controllervideojuegos = new VideojuegoController();
        $controllervideojuegos->Getjuego($params[1]);
        break;
    case 'generovideojuegos':
        $controllervideojuegos = new VideojuegoController();
        $controllervideojuegos->VideojuegosPorGenero($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
