<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pasar parametro por referencia</title>
</head>
<body>
    <?php
/*        function incrementa(&$valor1){

            $valor1++;

            return $valor1;
        }

        $numero = 5;    

        echo incrementa($numero) . "<br>";

        echo $numero;
*/

        //function cambia_mayus($param){
        function cambia_mayus(&$param){ //-->hOlA mUnDo

            $param = strtolower($param); //-->hola mundo

            $param = ucwords($param); //-->Hola Mundo

            return $param;

        }

        $cadena ="hOlA mUnDo";

        echo cambia_mayus($cadena) . "<br>"; //Hola mundo

        echo $cadena; //hOlA mUnDo

    ?>
</body>
</html>