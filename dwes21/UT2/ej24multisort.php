<!-- Crear un array bidimensional asociativo en el que la clave de la primera dimensión será 
el nombre de los equipos de la primera división de la liga de fútbol. Cada equipo 
contendrá un array de dos elementos, el primero, con clave “puntos” contiene la 
puntuación obtenida en la pasada liga. El segundo elemento con clave “posición” 
contendrá en número la posición en la tabla en la que finalizó el equipo la liga.
Utilizando los bucles que necesites muestra en pantalla los nombres de los equipos, los 
puntos y la posición de los equipos que terminaron en las tres primeras posiciones de la 
liga -->
<h3><b>Ejercicio 24</b></h3>

<?php
//array bidimensional asociativo
$equipos=array("RealMadrid"=>array(
    "puntos"=>10,
    "posicion"=>3
    ),
    "Atletico de Madrid"=>array(
        "puntos"=>20,
        "posicion"=>1
    ),
    "Barca"=>array(
        "puntos"=>30,
        "posicion"=>4
    )
);

// Al utilizar el array_multisort se ordena el nombre del equipo
$auxiliar=array_column($equipos,"posicion");//creo un array para almacenar la columna de la posición equipo
array_multisort($auxiliar,SORT_ASC, $equipos); //array_multisort ordena el 2do array en función del 1ero según el criterio ASC O DESC
//
foreach ($equipos as $equipo=>$datos){
    
    if ($equipos[$equipo]['posicion']<4){

        echo $equipo;
    
        foreach ($equipos [$equipo] as $clave=>$valor) //para entrar al siguiente array hago otro foreach
            
            echo "<li>$clave : $valor</li>";
        }
    echo "<br><br>";

}

?>