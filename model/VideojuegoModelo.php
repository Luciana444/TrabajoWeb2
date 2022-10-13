<?php

class VideojuegoModelo{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_videojuegos;charset=utf8', 'root', '');
    }

    function GetVideojuegos(){
        $sentencia = $this->db->prepare("SELECT * FROM videojuego");
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
        $sentencia = $this->db->prepare("SELECT * FROM videojuego WHERE id_genero = ?");
        $sentencia->execute(array($id_genero));
        $videojuegoporgenero = $sentencia->fetchall(PDO::FETCH_OBJ);

        return $videojuegoporgenero;
    }

    function GetVideojuego($videojuego){
        $sentencia = $this->db->prepare("SELECT * FROM videojuego WHERE id = ?");
        $sentencia->execute(array($videojuego));
        $Videojuego = $sentencia->fetch(PDO::FETCH_OBJ);
        return $Videojuego;
    }

    function AgregarVideojuego($videojuego){
        $sentencia = $this->db->prepare("INSERT INTO videojuego (nombre) VALUES (?)");
        $sentencia->execute(array($videojuego));
    }

    function EliminarVideojuego($id){
        $sentencia =  $this->db->prepare("DELETE FROM videojuego WHERE id_genero = ?");
        $sentencia->execute(array($id));
    }

    function ActualizarVideojuego($id,$nombre,$fecha_de_lanzamiento,$descripcion,$caracteristica,$id_genero){
        $sentencia =  $this->db->prepare("UPDATE generos SET genero = ? WHERE id = ?");
        $sentencia->execute(array($id,$nombre,$fecha_de_lanzamiento,$descripcion,$caracteristica,$id_genero));
    }
}