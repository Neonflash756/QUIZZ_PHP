<?php
    include('misfunciones.php');
    $mysqli = conectaBBDD();

    $respuesta = $_POST['respuesta'];
    $numeroPregunta = $_POST['numeroPregunta'];

    //Query bien hecha:
    $consulta = $mysqli -> prepare("SELECT correcta FROM `preguntas` WHERE numero = ? ");
    $consulta -> bind_param("s", $numeroPregunta);
    $consulta -> execute();
    $consulta -> store_result();
    $consulta -> bind_result($correcta);
    $consulta -> fetch();

    if($correcta == $respuesta){
        echo 'acertaste';
    }else{
        echo 'error';
    }
?>