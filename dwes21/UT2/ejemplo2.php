<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJEMPLO 2</title>
</head>
<body>
    <?php
    $mitienda = array("Camiseta", "Vaquero" , "Abrigo");
    $mitienda[] = "Chubasquero";

            //"clave" => "contenido"
    $mitienda = array("Camiseta" => "14", "Vaquero" =>"23", "Abrigo" =>"50");

    //array multidimensional, se crea la estructura dentro del "contenido"
    $mitienda = array("Camiseta" => array("Referencia"=>"00001","Precio"=>"14"), 
                    "Vaquero" => array("Referencia"=>"00002", "Precio"=>"23"), 
                    "Abrigo" =>array("Referencia"=>"00003","Precio"=>"50"));

    // foreach ($mitienda as $productos)
    // {
    //     echo "El producto es $prodcutos </br>";
    // }

    //en el bucle foreach (nombredelarray ) $datos es toda la estructura del array referencia y precio
    foreach ($mitienda as $productos =>$datos)
    {
        echo "El producto es "."$productos"." y tiene un precio de "." $datos </br>";
    }
    ?>
</body>
</html>