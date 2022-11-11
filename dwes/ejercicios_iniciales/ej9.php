<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Realizar un programa en php donde dado un número del 1 al 7 indique a que día de la 
semana corresponde. Si el número no está entre 1 y 7 el programa lo deberá de indicar.
 -->
    <?php
        $num = 6;

        switch($num){
            case 1:
                echo"Lunes";
            break;

            case 2:
                echo"Martes";
            break;

            case 3:
                echo"Miércoles";
            break;

            case 4:
                echo"Jueves";
            break;

            case 5:
                echo"Viernes";
            break;

            case 6:
                echo"Sábado";
            break;

            case 7:
                echo"Domingo";
            break;

            default:
                echo "El número indicado NO está entre 1 y 7";

            
        }

    ?>

</body>
</html>