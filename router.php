<?php
require_once "./controller/GenerosController.php";
require_once "./controller/VideojuegoController.php";

define("BASE_URL", "//".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"])."/");

$controllergeneros = new GenerosController();
$controllervideojuegos = new VideojuegoController();

$action = 'index';

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'index':
        $controllergeneros->MostrarGeneros();
        break;
    case 'videojuego':
        $controllervideojuegos->MostrarVideojuegos();
        break;
    case 'detallejuego':
        $controllervideojuegos->Getjuego($params[1]);
        break;
    case 'generovideojuegos':
        $controllergeneros->VideojuegosByGenre($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
