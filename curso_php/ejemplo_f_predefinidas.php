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

    function frase_mayus($frase , $conversion=true){ //parametro, parámetro por defecto

        $frase = strtolower($frase);

        if($conversion==true){

            $resultado = ucwords($frase);

        }else{

            $resultado = strtoupper($frase);
        }

        return $resultado;

    }

    //llamada a la función //al haber solo 1 valor en la llamada a la función, $conversion==true se cumplirá sí o sí y entrará en el if
    //echo (frase_mayus("esto es una prueba"));

    //si le paso el segundo parámetro
    echo (frase_mayus("esto es una prueba", false)); //no entrará en el if, sí entrará en el else



    ?>
</body>
</html>