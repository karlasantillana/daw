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

    function frase_mayus($frase, $conversion=true){

        $frase = strtolower($frase);

        if($conversion==true){

            $resultado = ucwords($frase);

        }else{
            $resultado = strtoupper($frase);
        }

        return $resultado;
    }

    echo frase_mayus("bLaNcA eS lA mEjOr" ,false);

?>

    
</body>
</html>