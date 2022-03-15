<?php

function conectaBBDD(){
    $direccion = "localhost";
    $usuario_BBDD = "pruebasTEST";
    $password_BBDD = "UPUELy5X7RGI8g8r";
    $nombre_BBDD = "ejemploquiz";
    $puerto = "3306";
    $conexion = new mysqli($direccion,$usuario_BBDD,$password_BBDD,$nombre_BBDD,$puerto);

    $consulta = $conexion ->query("SET NAMES UTF8");
    return $conexion;
}