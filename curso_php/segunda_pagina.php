<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
    <!-- variable: valor que puede variar durante la ejecución del programa. -->
</head>

<body>
    <?php
    //el nombre de la variable no debe empezar con un número
    //iniciar la variable--> almacenar en la variable el valor

    //DECLARO VARIABLE
    $nombre = "Karla"; //'Karla'; //valor string--> entre comillas dobles o simples

    $edad = 25; //valor numérico no hace falta las comillas

    //IMPRIMIR POR PANTALLA con PRINT -->PRINT es una función--> devuelve el valor 1
    //concatenar con .
    print "El nombre del usuario es " . $nombre;

    print "<br>";

    //o incluir la variable dentro del string
    print "El nombre del usuario es $nombre";

    print "<br>";

    //comilla simple -->ignora que $nombre es una varibale y lo muestra literalmente
    print 'El nombre del usuario es $nombre';

    print "<br>";

    //---------------------------------------------------------------------------//
    //con ECHO --> ECHO es una expresión
    echo "La señorita " . $nombre . " tiene " . $edad . "años";

    echo "<br>";

    echo "La señorita $nombre tiene $edad años";

    echo "<br>";

    //admite imprimir por pantalla varias expresiones
    echo $nombre , $edad;

    ?>
</body>

</html>