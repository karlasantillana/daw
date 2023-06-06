<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $busqueda = $_GET["buscar"];

    /******************************conexión con Mysqli***************/
    require("datos_conexion.php");

    //CONECTAR CON BBDD
    $conexion = mysqli_connect($db_host , $db_usuario , $db_contraseña , $db_nombre);


    //Consultas o query o sentencias sql
    $consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $consulta);


    //obtener registros con bucle WHILE (*NO* sabiendo la cantidad de registros que hay) 
    //Prescindo de la variable $registros y del condicional booleano TRUE
    while($fila = mysqli_fetch_array($resultados , MYSQLI_ASSOC)){

        echo "<table><tr>";
        echo "<td>". $fila['CÓDIGOARTÍCULO'] ."</td>";
        echo "<td>". $fila['SECCIÓN'] ."</td>";
        echo "<td>". $fila['NOMBREARTÍCULO'] ."</td>";
        echo "<td>". $fila['PRECIO'] ."</td>";
        echo "<td>". $fila['FECHA'] ."</td>";
        echo "<td>". $fila['IMPORTADO'] ."</td>";
        echo "<td>". $fila['PAÍSDEORIGEN'] ."</td>";
        echo "<td>". $fila['FOTO'] . "</td></tr></table>";

        echo "<br>";
        echo "<br>";
    }

    //CERRAR CONEXIÓN
    mysqli_close($conexion);
?>    
</body>
</html>