<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    //variable superglobal=$_get
    //con el isset confirmo se se ha mandado el formulario o no
    // if(isset($_POST['nombre'])){
    //     $nombre = $_POST['nombre'];
    //     echo "Bienvenid@ $nombre";
    // }

    if(isset($_POST['nombre'])){
        $nombre = (int)$_POST['nombre'];

        if(is_integer($nombre))
        echo "Admitido";

        else
            echo "No Admitido";

    echo "<br>¡Bienvenido $nombre!";    
    }

    ?>
</head>

<body>
    <!-- se forma un array asociativo con nombre y el botón los cuales mandan esa info, el contenido de Nombre y la acción del botón -->
    <!-- así el resultado del formulario se muestra en la misma página -->
    <form method="post" action="formulario.php">

        <label for="nombre">Nombre: </label>

        <input type="number" name="nombre" required></input>

        <p><input type="submit" name="botonEnviar" value="Enviar datos"></input></p>
    </form>
    
</body>
</html>