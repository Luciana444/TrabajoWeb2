<?php

class AuthHelper{
    function __construct(){

    }

    function checklogin(){
        if(!isset($_SESSION))
            session_start();
        if(!isset($_SESSION["USER_ID"])){
            header("Location: " . BASE_URL);
            die();
        }
    }
}