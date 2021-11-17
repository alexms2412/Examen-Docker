<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>Examen Docker</title>
</head>

<body>


    <div id="div1">

        <h3>Entorno lamp / Alex Moreno</h3>

    </div>



    <div id="div2">

        <img src="Emails.gif">

    </div>

    <div id="div3">

        <h4>

            <?php

            $host = 'db';
            $user = 'devuser';
            $password = 'devpass';
            $db = 'test_db';

            $conn = new mysqli($host, $user, $password, $db);
            if ($conn->connect_error) {
                echo 'Conexión Fallida';
            }


            $resultado = $conn->query("SELECT * FROM vehiculos");

            for ($num_fila = $resultado->num_rows - 0; $num_fila >= 1; $num_fila--) {
                $resultado->data_seek($num_fila);
                $fila = $resultado->fetch_assoc();
                echo " Marca = " . $fila['marca '] . ' / ';
                echo " Modeo = " . $fila['modelo '] . '<br>';
            }

            echo "<a href='http://localhost:8080'> PhpMyAdmin </a>";

            ?>

        </h4>

    </div>




    <?php




    ?>

</body>

</html>