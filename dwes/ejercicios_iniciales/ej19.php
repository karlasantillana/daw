<!-- 
Busca cuatro imágenes en internet. Crea una página que muestre de forma aleatoria 
una de ellas 
-->
<?php 
$imagenes=["perro.jpeg" , "gato.jpeg" , "conejo.jpeg" , "venado.jpeg"];

//$aleatoria=rand(0 , count($imagenes) );
$aleatoria=rand(0 , 3);

echo '<img src="'.$imagenes[$aleatoria].'">';
?>