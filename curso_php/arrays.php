<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>
<body>
    <?php       
        //ARRAY INDEXADO
        /*
        $semana[]="Lunes";

        $semana[]="Martes";

        $semana[]="Miércoles";

        $semana[]="Jueves";

        //para recorrer array indexado con bucle for, del cual no sé la cantidad de elementos
        for($i=0 ; $i<count($semana) ; $i++){

            echo $semana[$i] . "<br>";
        }
        
        //añadir un elemeto al array indexado $semana
        $semana[]="Viernes";

        //copio el bucle debajo del nuevo elemento para que recorra el array y tenga en cuenta el nuevo elemento "viernes" 
        for($i=0 ; $i<count($semana) ; $i++){

            echo $semana[$i] . "<br>";
        }
        */


        //funcion array()
        /*
        $semana = array("Lunes" , "Martes" , "Miércoles" , "Jueves");

        echo $semana[3];
        */


        //ARRAY ASOCIATIVO
        //ej datos personales de una persona
        /*
        $datos=array("Nombre"=>"Jona" , "Apellido"=>"Paredes" , "Edad"=>36);

        $datos["País"]="España";

        foreach($datos as $clave=>$valor){

            echo "A $clave le corresponde $valor <br>";
        }
        */


        //sin ordenar alfabéticamente array 
        $semana = array("Lunes" , "Martes" , "Miércoles" , "Jueves");

        echo "<pre>";
        print_r($semana);
        echo "</pre>";


        sort($semana); //ordenar en orden alfabético

        for($i=0 ; $i<count($semana) ; $i++){
            
            echo $semana[$i] . "<br>";
        }

        echo "<pre>";
        print_r($semana);
        echo "</pre>";
    
    ?>
</body>
</html>