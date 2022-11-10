<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de ejecución</title>
    <!-- El orden de ejecución va de arriba a abajo -->
</head>
<body>
    <?php
    //1º
    echo "Este es el primer mensaje <br>";

    // include ("proporciona_datoss.php");
    require ("proporciona_datos.php");

   //2º 
    echo "Este es el segundo mensaje <br>";

    //3º
    //llamo a la función
    dameDatos();

    ?>
</body>
</html>