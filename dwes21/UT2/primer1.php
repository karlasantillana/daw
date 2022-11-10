<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer php</title>
</head>

<body>
    <?php
    echo "Mi primer php";
    //Comentario de una línea

    /* Comentario de 
    párrafo */

    //VARIABLES //no hace falta especificar el tipo de variable //puede llevar guión bajo NO números a partir del 3er caracter
    $nombre1 = "Juanma"; 
    $nombre2 = "Joserra";
    $nivel = 24;
    $profe =FALSE; //FALSE=0-null-vacío TRUE=1 
    $_sueldo = 'poco';
    echo "$nombre1, $nombre2, $nivel, $profe, $_sueldo<br>";

    $dato = "IMPRIMIBLE";
    $texto_simple = 'No puede imprimir la variable $dato';
    $texto_doble = "Imprime la variable dato como $dato"; //si este string llevara comillas simples en lugar de dobles, como el string anterior, mostraría el nombre de la variable 
    echo "$texto_simple<br>";
    echo ("$texto_doble<br>"); //se imprime con paréntesis o sin


    echo "<br><br><br><br>";

    // /* ÁMBITO VARIABLES */ 
    $x = 10; $y = 20; //ámbito global

    function ambito() {
        $x = 1; $y = 2; //ámbito local a la función
        echo "Variables locales a la función: <br>";
        echo "x = $x <br>"; echo "y = $y <br><br>";
    }
        ambito();

        // global $x,$y; //modificador global para llamar las variables globales fuera de la función
        echo "Variables globales: <br>";
        echo "x = $x <br>"; echo "y = $y <br>";
    // }
    // ambito(); //llamo function al final

    

    ?>
</body>
</html>