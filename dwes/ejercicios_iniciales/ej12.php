<!-- 
Realiza un programa en php en el que se declare un vector donde en cada posición se
almacene un día de la semana. A continuación, imprima la posición que corresponda
para que en pantalla se muestre: miércoles. 
-->

<?php 

/*
//asignación directa
$semana[] = "Lunes";
$semana[] = "Martes";
$semana[] = "Miércoles";
$semana[] = "Jueves";
$semana[] = "Viernes";
$semana[] = "Sábado";
$semana[] = "Domingo";
*/
//Con la función ARRAY
$semana = array("Lunes" , "Martes" , "Miércoles" , "Jueves" , "Viernes" , "Sábado" , "Domingo");

echo $semana[2];
?>