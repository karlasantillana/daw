<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexionBBDD</title>

    <style>
        table{
            width: 50%;
            border: 1px dotted red;
            margin: auto;
        }
    </style>
</head>

<body>
<?php
    /******************************conexión con Mysqli***************/
    require("datos_conexion.php");

    //CONECTAR CON BBDD
    $conexion = mysqli_connect($db_host , $db_usuario , $db_contraseña , $db_nombre);


    //Consultas o query o sentencias sql
    $consulta="SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN ='ESPAÑA'";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $consulta);


    //obtener registros con bucle WHILE (*NO* sabiendo la cantidad de registros que hay) 
    //Prescindo de la variable $registros y del condicional booleano TRUE
    while($fila = mysqli_fetch_row($resultados)){

        echo "<table><tr>";
        echo "<td>". $fila[0] ."</td>";
        echo "<td>". $fila[1] ."</td>";
        echo "<td>". $fila[2] ."</td>";
        echo "<td>". $fila[3] ."</td>";
        echo "<td>". $fila[4] ."</td>";
        echo "<td>". $fila[5] ."</td>";
        echo "<td>". $fila[6] ."</td></tr></table>";

        echo "<br>";
        echo "<br>";
    }

    //CERRAR CONEXIÓN
    mysqli_close($conexion);
?>
</body>
</html>

