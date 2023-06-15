<?php
    // $busqueda = $_GET["buscar"];

    //Variables que recoge lo ingresado por teclado en el form con el name de cada <input>
    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["n_art"];
    $pre = $_GET["precio"];
    $fec = $_GET["fecha"];
    $imp = $_GET["importado"];
    $por = $_GET["p_orig"];


    /************************conexión con Mysqli*************************/
    require("datos_conexion.php");

    //CONECTAR CON BBDD
    $conexion = mysqli_connect($db_host , $db_usuario , $db_contraseña , $db_nombre);


    //**********Consulta o query o sentencia sql*****/ 
    $query="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO ='$cod' ";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $query);


    //Informar si se ha agregado o no el nuevo registro
    if($resultados==false){
        echo "Error en la consulta.";
    }else{
        echo "Registro eliminado <br><br>";
    }


    //CERRAR CONEXIÓN
    mysqli_close($conexion);
?>