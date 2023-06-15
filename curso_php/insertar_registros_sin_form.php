<?php

    // $busqueda = $_GET["buscar"];

    /************************conexión con Mysqli*************************/
    require("datos_conexion.php");

    //CONECTAR CON BBDD
    $conexion = mysqli_connect($db_host , $db_usuario , $db_contraseña , $db_nombre);


    //**********Consulta o query o sentencia sql*****/ 
    //por tanto, si ejecuto la misma consulta, se añadirá el mismo artículo
    $query="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44' , 'DEPORTES', 'RAQUETA')";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $query);


    //CERRAR CONEXIÓN
    mysqli_close($conexion);

?>    
