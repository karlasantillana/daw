<!--
Realiza una matriz de 3 filas por 4 columnas. El contenido de cada uno de los elementos 
de la matriz se generará de manera aleatoria. Una matrizez generada: 
• Muestra el contenido de la matriz en formato filas x columnas
• Identifica el número mayor y menor generado dentro de la matriz
• Calcula la media de los números impares contenidos en la matriz
• Imprime únicamente la diagonal 
• Imprime únicamente la primera columna 
-->
<?php

/*
for($fila=0 ;$fila<3 ; $fila++){
    for($columna=0 ;$columna<4 ; $columna++){
        array_push($elementos , rand(0,25));
    }
}
*/




//primero creo una lista con 12 números aleatorios
$matriz = array(array() , array() , array());

/*
for($fila=0 ; $fila<12 ; $fila++){
    array_push($matriz , rand(0,25));
}
echo "<pre>";
print_r($matriz);
echo "</pre>";
*/


////


for($fila=0 ; $fila<3 ; $fila++){
    for($col=0 ; $col<4 ; $col++){
        echo $matriz[$fila][$col] = rand(0 , 25);

        /* Muestra el contenido de la matriz en formato filas x columnas */
        if ($col == 3) {
            echo $matriz[$fila][$col]."</br>";
        } else {
            echo $matriz[$fila][$col].", ";
        }
    }
}



echo "<pre>";
print_r($matriz);
echo "</pre>";
?>