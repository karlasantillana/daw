<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>

    <link rel="StyleSheet" href="style_val.css" type="text/css" media=screen >
    
</head>

<body>
    <h1>Usando condicionales</h1>
    <form action="validacion_condicionales.php" method="post" 
            name="datos_usuario" id="datos_usuario">

        <table>

            <tr>
                <td><label for="nombre_usuario"> Nombre:</label></td>
                <td><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
            </tr>

            <tr>
                <td><label for="edad_usuario"> Edad: </label></td>
                <td><input type="text" name="edad_usuario" id="edad_usuario"></td>
            </tr>

            <tr>
                <td colspan="2"> <br> </td> <!-- o  &nbsp; -->
            </tr>

            <tr>
                <td class="celdaboton" colspan="2">
                    <input type="submit" name="enviando" id="enviando" value="Enviar">
                </td>
            </tr>

        </table>

    </form>



</body>

</html>