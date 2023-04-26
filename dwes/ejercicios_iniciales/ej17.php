<!-- 
Crea un array asociativo que contenga la siguiente información:
Array supermercado: 
Fruta (Pera, Manzana, Plátano)
Verdura (Berenjena, Calabacín)
Lácteos (leche, yogur, queso, kéfir)
Muestra el array en pantalla haciendo uso del bucle foreach. 
-->
<?php
$supermercado = array("fruta"=>array("pera" , "manzana" , "plátano"),
                    "verdura"=>array("berenjena" , "calabacín"),
                    "lácteos"=>array("leche" , "yogur" , "queso" , "kéfir")
                );

foreach($supermercado as $clave =>$valor){
    echo "<br>$clave:<br>";

    foreach($valor as $tipoalim=>$alim){
        echo "$tipoalim =>$alim<br>"; //se imprime el índice también
    }
}
?>