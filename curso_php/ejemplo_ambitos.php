<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ámbitos variables</title>
</head>

<body>
    <?php

    //he hecho que esta variable sea GLOBAL    //VARIABLE FUERA DE LA FUNCIÓN
    $nombre = "Karla";

    //////////////////////ÁMBITO DENTRO DE LA FUNCIÓN
    //declaro función
    function dameNombre(){

        //no se puede acceder desde dentro a algo que se encuentra fuera
        //SOLUCIÓN--> hacer global la variable que se encunetra fuera de la función
        global $nombre;

        //VARIABLE LOCAL   //VARIABLE DENTRO DE LA FUNCIÓN
        $nombre = "El nombre es " . $nombre;
    }
    ////////////////////////////

    dameNombre();

    echo $nombre; //no accede a la variable dentro de la función

    ?>
</body>

</html>