<?php

class AdministradorModelo {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_videojuegos;charset=utf8', 'root', '');
    }

    public function getUserByEmail($email) {
        $sentencia = $this->db->prepare("SELECT * FROM administrador WHERE email = ?");
        $sentencia->execute(array($email));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}
