<!-- 
Realiza un programa en php en el que se declare un vector que contenga los siguientes 
cuatro elementos: índice: 1 valor: 90, índice: 30 valor: 7, índice: ‘e’ valor 99, índice: 
‘hola’, valor:43. A continuación imprime los valores con sus índices asociado utilizando 
la estructura de control foreach. El resultado debe de mostrar: 
El elemento de índice _ vale _.  
-->

<?php 
$canela =array(1=>90 , 30=>7 , "e"=>99 , "hola"=>43);

foreach($canela as $clave=>$valor){
    echo "El elemento de índice $clave vale $valor. <br>";
}

?>