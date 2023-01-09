<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coche y camion</title>
</head>
<body>
    <?php
        include("vehiculos.php");

        $ferrari = new Coche();

        $toyota = new Camion();


        //ej:quiero ver las ruedas de coche y camion
        echo "El Ferrari tiene " . $ferrari->ruedas . " ruedas <br>";
        echo "El Toyota tiene " . $toyota->ruedas . " ruedas <br>";

        echo "<br>OBJETO TIPO COCHE<br>";
        $ferrari->establecer_color("verde" , "ferrari");

        echo "<br>OBJETO TIPO CAMIÓN<br>";
        $toyota->frenar();
        echo $toyota->ruedas;       
        
        echo "<br><br>";

        echo $toyota->color;
                
        echo "<br><br>";

        
        $toyota->arrancar();
        
    ?>
</body>
</html>