<?php

class AuthHelper {

    public function VerificarLogueado() {
        session_start();
        if (!isset($_SESSION['USER_EMAIL'])) {
            header("Location: " . BASE_URL . 'ingresar');
            die();
        }
    }
}