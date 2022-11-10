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
        // define("AUTOR" , "Karla Santillana"); //declarado con define

        const Constante1 = "Blanca Jiménez"; //declarado con const

        echo "El autor es: "  . Constante1;

        echo "<br>";

        echo "La línea de esta instrucción es: " . __LINE__;

        echo "<br>";

        echo "Estamos trabajando con este fichero: " . __FILE__;
        
    ?>
</body>
</html>