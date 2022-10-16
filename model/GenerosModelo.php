<?php

class GenerosModelo{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_videojuegos;charset=utf8', 'root', '');
    }

    function GetGeneros(){
        $sentencia = $this->db->prepare("SELECT * FROM generos");
        $sentencia->execute();
        $generos = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $generos;
    }

    function GetGenero($genero){
        $sentencia = $this->db->prepare("SELECT * FROM generos WHERE id_genero = ?");
        $sentencia->execute(array($genero));
        $Genero = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $Genero;
    }

    function AgregarGenero($genero){
        $sentencia = $this->db->prepare("INSERT INTO generos (genero) VALUES (?)");
        $sentencia->execute(array($genero));
    }

    function EliminarGenero($id_genero){
        $sentencia =  $this->db->prepare("DELETE FROM generos WHERE id_genero = ?");
        $sentencia->execute(array($id_genero));
    }

    function ActualizarGenero($genero, $id_genero){
        $sentencia =  $this->db->prepare("UPDATE generos SET genero = ? WHERE id_genero = ?");
        $sentencia->execute(array($genero, $id_genero));
    }
}
