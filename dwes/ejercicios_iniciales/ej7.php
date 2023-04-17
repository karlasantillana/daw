<!-- Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos 
enteros: Almacena en una variable un valor entero que la computadora genera de forma 
aleatoria entre 1 y 100. Hacer un programa que muestre por pantalla el valor generado. 
Mostrar además si es menor o igual a 50 o si es mayor.  -->

    <?php

        $random = rand(1,100);

        echo "valor random generado: $random <br>";

        if ($random>50){

            echo "El valor es MAYOR que 50";

        }else if($random<50){

            echo "El valor es MENOR que 50";

        }else{

            echo "El valor es IGUAL a 50";
        }

    ?>
