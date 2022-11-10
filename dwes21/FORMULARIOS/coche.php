<?php

include 'vehiculosPOO.php';

//instancias
//-------------- COCHE --------------
$renault = new Coche();
//para acceder a la instancia del coche
$renault -> arrancar(); 
echo "Las ruedas son " . $renault -> ruedas. "</br>"; 


//--------------- MOTO ------------------
$honda = new Moto();
$honda -> arrancar();
$honda -> girar();
echo "El color inicial es " 
$honda -> establece_color("Azul");
?>