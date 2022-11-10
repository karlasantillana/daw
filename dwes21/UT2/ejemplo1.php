<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJEMPLO 1</title>

    <?php
    function aprobados(){
        $numero=50;
        global $numero;
        $total=($numero*2)/3;
        //echo $total;
        return $total; //para mostrar por pantalla una función se usa RETURN
    }
    ?>
</head>
<body>
    <?php
    $numero="20";
    echo "Hola Mundo, tengo $numero </br>";
    echo "Solo han aprobado " . aprobados(). " alumnos crack"

    //llamo a la function APROBADOS
    //aprobados();
    ?>
    
</body>
</html>