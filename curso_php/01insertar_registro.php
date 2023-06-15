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
    $query="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) 
    VALUES ('$cod' , '$sec', '$nom', '$pre', '$fec' , '$imp', '$por')";

    //Ejecutar la consulta con la función mysqli_query($conexion , $sql); con dos argumentos
    $resultados = mysqli_query($conexion , $query);


    //Informar si se ha agregado o no el nuevo registro
    if($resultados==false){
        echo "Error en la consulta. No se ha agregado a la tabla";
    }else{
        echo "Registro guardado <br><br>";

        echo "<table>
                <tr>
                    <td>$cod</td>
                </tr>
                <tr>
                    <td>$sec</td>
                </tr>
                <tr>
                    <td>$nom</td>
                </tr>                
                <tr>
                    <td>$pre</td>
                </tr>            
                <tr>
                    <td>$fec</td>
                </tr>
                <tr>
                    <td>$imp</td>
                </tr>
                <tr>
                    <td>$por</td>
                </tr>                        
        </table>";
    }


    //CERRAR CONEXIÓN
    mysqli_close($conexion);
?>