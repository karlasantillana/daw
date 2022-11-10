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

    /////////CASTING IMPLÍCITO (por defecto por PHP)
    $num4 = "5.42"; //tipo string

    $num4 += 2; //incrementa en 2 //convierte a integer

    $resultado = $num4 + 5.75; //convierte a float

    echo "El resultado es: " . $resultado;


    //////////CASTING EXPLÍCITO
    $num4 = "5.42"; //tipo string
    $num4 += 2; //incrementa en 2 //convierte a 7.42
    $resultado = (int)$num4 + 5.75; //7.42 se convierte a 7 y suma 5.75
    echo "El número es: " . $resultado; 


    ?>
</body>

</html>