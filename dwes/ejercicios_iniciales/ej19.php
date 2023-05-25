<!-- 
Busca cuatro imágenes en internet. Crea una página que muestre de forma aleatoria 
una de ellas 
-->
<?php 
$imagenes=["perro.jpeg" , "gato.jpeg" , "conejo.jpeg" , "venado.jpeg"];

//$aleatoria=rand(0 , count($imagenes) ); //da error porque cuenta 4 imágenes y en la posición 4 no hay nada
$aleatoria=rand(0 , 3);

echo '<img src="'.$imagenes[$aleatoria].'">';
?>