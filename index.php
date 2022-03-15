<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ PHP</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">
            QUIZ PHP 
            </span>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">

            <div class="col-2">
            
            </div>

            <div class="col-8" id="partida">
                <?php
                include('misfunciones.php');
                //mysql guarda la conexion a la BBDD
                $mysqli = conectaBBDD();

                $consulta = $mysqli -> query("SELECT * FROM `preguntas` GROUP BY `tema`");
                $num_filas = $consulta -> num_rows;

                for($i=0;$i<$num_filas;$i++){
                    $r = $consulta -> fetch_array();
                    echo'<button onclick="cargaTema('.$r['tema'].')" type="button" class="btn btn-primary col-12">'.$r['tema'].'</button><br><br>';
                }
                ?>
            </div>

            <div class="col-2">
            
            </div>
        </div>
    </div>
    <script>src="js/jquery.js"</script>

    <script>
        function cargaTema(_tema){
            $('#partida').load('partida.php', {tema: _tema});
        }
    </script>
</body>
</html>