<!-- Realiza un programa en php que dados dos números indique cuál de dos números es el 
mayor. Inicialmente el programa mostrará el valor de los números y a continuación 
indicará: El número _ es mayor que el número _. -->
    <?php
    
        $num1 = 4;
        $num2 = 6;

        echo "1er número: $num1 <br>";
        echo "2do número: $num2 <br><br>";

        if ($num1>$num2){

            echo "El número $num1 es mayor que el número $num2";

        }else if($num2>$num1){

            echo "El número $num2 es mayor que el número $num1";

        }else{
            echo "El número $num1 es igual a $num2";
        }
    ?>