<?php
//array asociativo
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "cítrico"=>"mandarina",
                                "otros"=>"manzana") ,

                 "leche"=>array("animal"=>"vaca",
                                "vegetal"=>"coco") , 

                 "carne"=>array("vacuno"=>"lomo",
                                "porcino"=>"pata")
                );
 
/*                                
//quiero acceder y trabajar al elemento "lomo"
echo $alimentos["carne"]["vacuno"];
*/

/*
foreach($alimentos as $clave_alim=>$alim){
    echo "$clave_alim :<br>";

    //desdoblar array tropical=>kiwi , etc... (array 2da dimensión)
    while(list($clave , $valor) = each($alim)){
        echo "$clave = $valor<br>";
    }

    echo "<br>";
}
*/
foreach($alimentos as $clave_alim =>$alim){
    echo "<br>$clave_alim :<br>";

    foreach($alim as $claveTipo=>$valor){
        echo "$claveTipo => $valor <br>";
    }
}

// // 
// echo "<pre>";
// var_dump($alimentos); //var_dump(); a parte de la clave y elementos, muestra el tipo
// //print_r($alimentos); 
// echo "</pre>";
?>