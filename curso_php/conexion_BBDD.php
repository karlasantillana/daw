<?php
    require("dato_conexion.php");

    //CONECTAR CON BBDD
    $conexion = mysqli_connect($db_host , $db_usuario , $db_contraseña , $db_nombre);


    //Consultas o query o sentencias sql
    $consulta="SELECT * FROM DATOSPERSONALES";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $consulta);

/*
    //obtener registros con bucle WHILE (sabiendo la cantidad de registros que hay)
    $registros=1;

    while(($fila = mysqli_fetch_row($resultados))==true){

        $fila = mysqli_fetch_row($resultados);

        echo $fila[0] ." ";
        echo $fila[1] ." ";
        echo $fila[2] ." ";
        echo $fila[3] ." ";
    
        echo "<br>";
    
        $registros++;
    }
*/



    //obtener registros con bucle WHILE (*NO* sabiendo la cantidad de registros que hay) 
    //Prescindo de la variable $registros y del condicional booleano TRUE
    while($fila = mysqli_fetch_row($resultados)){

        echo $fila[0] ." ";
        echo $fila[1] ." ";
        echo $fila[2] ." ";
        echo $fila[3] ." ";
    
        echo "<br>";
    }

    //CERRAR CONEXIÓN
    mysqli_close($conexion);

?>