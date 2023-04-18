<!-- 
Realiza un programa en php en el que se declare un vector de 5 posiciones. Cada
posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). 
A continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array.
Si es así, deberá de borrar el elemento del array.
-->

<?php

$colores = array("azul" , "rojo" , "verde" , "rosa" , "naranja");
echo "<pre>";
print_r ($colores);
echo "</pre>";
//echo in_array("rosa" , $colores); //false = 0  true = 1

/*
if (in_array("rosa" , $colores)){
    echo 'El valor rosa SÍ se encuentra almacenado en el array $colores'; //comilla simple:  ignora que $colores es una variable y lo muestra literalmente
}else{
    echo 'El valor rosa NO se encuentra almacenado en el array $colores';
}
*/

for($i=0 ; $i<count($colores) ; $i++){

    if($i="rosa"){
        echo "El valor rosa se encuentra almacenado en el array" ;
    }
}
unset($colores[3]);
echo "<pre>";
print_r ($colores);
echo "</pre>";

?>