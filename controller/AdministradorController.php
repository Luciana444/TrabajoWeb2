<?php
require_once './view/AdministradorVista.php';
require_once './model/AdministradorModelo.php';

class AdministradorController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new AdministradorModelo();
        $this->view = new AdministradorVista();
    }

    public function MostrarFormulario() {
        $this->view->MostrarFormulario();
    }

    public function ValidarUsuario() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

        if ($user && password_verify($password, $user->password)) {

            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
           $this->view->MostrarFormulario("El usuario o la contraseña no existe.");
        } 
    }

    public function cerrarsesion() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}