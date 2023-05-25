//************************conexión con Mysqli************************///

<?php

    //almacenar los 4 datos siempre requeridos para conectar con la bbdd
    $db_host= "localhost"; //dirección de bbdd
    $db_nombre = "pruebas"; //nombre de bbdd
    $db_usuario = "root"; //usuario de bbdd
    $db_contraseña = ""; //contraseña de bbdd

    //CONECTAR CON BBDD
    $conexion = mysqli_connect($db_host , $db_usuario , $db_contraseña , $db_nombre);

    //Consultas o query o sentencias sql
    $consulta="SELECT * FROM DATOSPERSONALES";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $consulta);





?>