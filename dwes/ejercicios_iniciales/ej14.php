<!-- Almacene en un vector los 10 primeros número pares. Imprímalos cada uno en una 
línea -->
<?php

$num=20;
$pares= array();

/*
for ($i=0; $i<20 ; $i+=2) { 

    // if($i%2==0){
        array_push($pares, $i);
    // }
}
*/
//Operador ternario
for ($i=0; $i<20 ; $i++) { 

     $i%2==0 ? array_push($pares, $i) : "" ;
    
}


echo "<pre>";
print_r($pares);
echo "</pre>";

?>