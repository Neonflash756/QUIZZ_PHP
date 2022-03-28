<?php
    include('misfunciones.php');
    $mysqli = conectaBBDD();

    $respuesta = $_POST['respuesta'];
    $numeroPregunta = $_POST['numeroPregunta'];

    /*
    Query mal hecha:
    $consulta = $mysqli -> query("SELECT * FROM `preguntas` WHERE numero ='$numeroPregunta' ");
    $r = $consulta -> fetch_array();
    */

    //Query bien hecha:
    $consulta = $mysqli -> prepare("SELECT * FROM `preguntas` WHERE numero = ? ");
    $consulta = $mysqli -> bind_param("s", $numeroPregunta);


    if($r['correcta'] == $respuesta){
        echo 'acertaste';
    }else{
        echo 'error'
    }
?>