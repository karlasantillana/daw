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

foreach ($equipos as $equipo=>$datos){
    
    if ($equipos[$equipo]['posicion']<4){

        echo $equipo;
    
        foreach ($equipos [$equipo] as $clave=>$valor) //para entrar al siguiente array hago otro foreach
            
            echo "<li>$clave : $valor</li>";
        }
    echo "<br><br>";

}
// echo $equipo;
// if($equipos[$equipo]['posicion']<4){
// echo "Equipo: $equipo" Puntos: {$dato['puntos']}
//                         Posicion:{$dato['posicion']};
// }

    // echo $equipo;
    // foreach ($datosEquipo as $clave=>$dato){
    //         if($clave=='posicion'){
    //             if(($dato)==1 or ($dato==2) or ($dato==3)){
    //             foreach($datosEquipo as $clave=>$dato){
    //                 echo "<ul>";
    //                 echo"<li>$clave:$dato</li>";
    //                 echo "</ul>";}
    //             }
    //         }	
    // }

?>