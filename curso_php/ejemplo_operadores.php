<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>

</head>

<body>
    <form action="" method="post" name="form1" id="form1">

        <label for="num1"></label>
        <input type="text" name="num1" id="num1"> 

        <label for="num2"></label>
        <input type="text" name="num2" id="num2">

        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
            <option>Incremento</option>
            <option>Decremento</option>
        </select>

        <br><br>
        <input type="submit" name="boton" id="button" value="Enviar" onclick="prueba">

    </form>

    <br>

    <?php
        include ("calculadora.php");

        if(isset($_POST["boton"])){

            //alamacenar valores
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $tipoOperacion = $_POST["operacion"];

            calcular($tipoOperacion); 
        }
    ?>
    
</body>
</html>