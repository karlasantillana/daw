<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Realizar un programa en php en el que dado un número entero positivo determine si es 
par o impar. Si el número no es un entero positivo deberá de mostrar un mensaje 
indicándolo (la función is_integer puede ayudarte) -->
    <?php

        echo $num = 8;
        echo "<br>";

        if(is_integer($num)){

            if($num%2==0){
                echo "El número es par";                   

            }else if($num <0){

                echo "El número es entero pero NO positivo";

            }else{
                
                echo "El número es impar";
            }

        }else{
           echo "El número indicado NO es entero positivo";
        }
    ?>
</body>
</html>