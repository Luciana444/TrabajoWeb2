<?php
require_once "./controller/GenerosController.php";
require_once "./controller/VideojuegosController.php";
require_once './controller/AdministradorController.php';

//Se define la variable BASE_URL usando la informacion del contexto de ejecusion
define("BASE_URL", "//".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"])."/");

//definir una action base, pagina inicial (url)
$action = 'index';

//si obtengo una redireccion del Get sobre escribo action 
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

//obtengo el nombre de la pagina de la url
$params = explode('/', $action);
$pageName = $params[0];

session_start();

switch ($pageName) {
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
        $controllervideojuegos = new VideojuegosController();
        $controllervideojuegos->MostrarVideojuegos();
        break;
    case 'detallejuego':
        $controllervideojuegos = new VideojuegosController();
        $controllervideojuegos->Getjuego($params[1]);
        break;
    case 'generovideojuegos':
        $controllervideojuegos = new VideojuegosController();
        $controllervideojuegos->VideojuegosPorGenero($params[1]);//params[1] es id_genero que llega desde la vista de generos
        break;
    case 'borrarvideojuego':
        $controllervideojuegos = new VideojuegosController();
        $controllervideojuegos->BorrarVideojuego($params[1]);
        break;
    case 'borrargenero':
        $controllergeneros = new GenerosController();
        $controllergeneros->BorrarGenero($params[1]);
        break;
    case 'agregarvideojuego':
        $controllervideojuegos = new VideojuegosController();
        $controllervideojuegos->AgregarVideojuego();
        break;
    case 'agregargenero':
        $controllergeneros = new GenerosController();
        $controllergeneros->AgregarGenero();
        break;
    case 'editargenero':
        $controllergeneros = new GenerosController();
        $controllergeneros->EditarGenero();
         break;
    case 'editarvideojuego':
        $controllervideojuegos = new VideojuegosController();
        $controllervideojuegos->EditarVideojuego();
        break;
    default:
        echo('404 Page not found');
        break;
}
