<!--
Realiza una matriz de 3 filas por 4 columnas. El contenido de cada uno de los elementos 
de la matriz se generará de manera aleatoria. Una vez generada: 
• Muestra el contenido de la matriz en formato filas x columnas
• Identifica el número mayor y menor generado dentro de la matriz
• Calcula la media de los números impares contenidos en la matriz
• Imprime únicamente la diagonal 
• Imprime únicamente la primera columna 
-->
<?php
$elementos=array();

for($i=0 ;$i<12 ; $i++){
    $numAleatorios = rand(0,12);
    array_push($elementos , $numAleatorios);
}
echo "<pre>";
print_r($elementos);
echo "</pre>";


////

for($fila=0 ; $fila<3 ; $fila++){
    echo $elementos[$fila];

    for($col=0 ; $col<4 ; $col++){
        echo $elementos[$fila][$col];
    }
}
?>