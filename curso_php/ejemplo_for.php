<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle_for</title>
</head>
<body>
    <?php
    
        //for($i=0 ; $i<=10 ; $i++){
        //for($i=10 ; $i>=0 ; $i--){
        for($i=0 ; $i<=20 ; $i+=2){

            echo " Hemos entrado en el bucle<br>";

            if($i==6){

                echo "Bucle interrumpido <br>";
                
                break; 
            }
        }
    ?>
</body>
</html>