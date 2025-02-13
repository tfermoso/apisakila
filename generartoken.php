<?php
use Firebase\JWT\JWT;

if(isset($_POST["user"]) && isset($_POST["password"])) {
    $user = $_POST["user"];
    $password = $_POST["password"];
    //Consulta a la base de datos para verificar si el usuario y contraseña son correctos
}