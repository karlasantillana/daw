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
    function incrementaVariable(){

        //iniciar variable a 0
        static $contador = 0;

        $contador++; //el valor de la variable $contador INCREMENTA en 1 

        echo $contador . "<br>";

    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    
    ?>
</body>
</html>