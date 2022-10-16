<?php

class VideojuegosModelo{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_videojuegos;charset=utf8', 'root', '');
    }

    function GetVideojuegos(){
        $sentencia = $this->db->prepare("SELECT * FROM videojuegos");
        $sentencia->execute();
        $videojuegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach($videojuegos as $videojuego){
            $query = $this->db->prepare('SELECT * FROM generos WHERE id_genero = ?');
            $query->execute([$videojuego->id_genero]);
            $genero = $query->fetch(PDO::FETCH_OBJ);
            $videojuego->id_genero = $genero->genero;
        }
        return $videojuegos;
    }

    function ConseguirVideojuegosPorGenero($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM videojuegos WHERE id_genero = ?");
        $sentencia->execute(array($id_genero));
        $videojuegoporgenero = $sentencia->fetchall(PDO::FETCH_OBJ);

        return $videojuegoporgenero;
    }

    function GetVideojuego($videojuego){
        $sentencia = $this->db->prepare("SELECT * FROM videojuegos WHERE id = ?");
        $sentencia->execute(array($videojuego));
        $Videojuego = $sentencia->fetch(PDO::FETCH_OBJ);
        return $Videojuego;
    }

    function AgregarVideojuego($videojuego,$fechadelanzamiento,$descripcion,$caracteristica,$id_genero){
        $sentencia = $this->db->prepare("INSERT INTO videojuegos (nombre,fecha_de_lanzamiento,descripcion,caracteristica,id_genero) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($videojuego,$fechadelanzamiento,$descripcion,$caracteristica,$id_genero));
    }

    function EliminarVideojuego($id){
        $sentencia =  $this->db->prepare("DELETE FROM videojuegos WHERE id = ?");
        $sentencia->execute(array($id));
    }

    function ActualizarVideojuego($nombre,$fecha_de_lanzamiento,$descripcion,$caracteristica,$id){
        $sentencia =  $this->db->prepare("UPDATE videojuegos SET nombre = ?, fecha_de_lanzamiento = ?, descripcion = ?, caracteristica = ? WHERE id = ?");
        $sentencia->execute(array($nombre,$fecha_de_lanzamiento,$descripcion,$caracteristica,$id));
    }
}