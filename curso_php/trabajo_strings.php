<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>

    <style>
        .resaltar{
            color: #F00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $variable1 = "CASA";
    $variable2 = "Casa";


    $resultado = strcmp($variable1 , $variable2);
    
    
    if($resultado){ 

        echo "NO son iguales esos dos strings"; //TRUE (1)


    }else{
        echo "Son iguales esos strings"; //FALSE (0)
    }


    //operador negación
    // if(!$resultado){ //si $resultado no es TRUE -->FALSE

    //         echo "SON iguales"; 
            
    //     }else{ //si $resultado no es FALSE -->TRUE
    //         echo "NO son iguales"; 
    //     }
        
    ?>
</body>
</html>