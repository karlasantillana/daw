<style>
    .resultado{
        color: darkorchid;
        size: 30px;
    }
</style>

    <?php
    //código solo con funciones

        function calcular($calculo){ 

            if(!strcmp("Suma" , $calculo)){

                global $numero1 , $numero2;

                $resultado = $numero1 + $numero2;

                echo "<p class='resultado'> El resultado es: $resultado </p>";
                //echo "El reusltado es:" . $resultado;
            }

            if(!strcmp("Resta" , $calculo)){

                global $numero1 , $numero2;

                $resultado = $numero1 - $numero2;

                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }

            if(!strcmp("Multiplicación" , $calculo)){

                global $numero1 , $numero2;

                $resultado = $numero1 * $numero2;

                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }

            if(!strcmp("División" , $calculo)){

                global $numero1 , $numero2;

                $resultado = $numero1 / $numero2;

                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }

            if(!strcmp("Módulo" , $calculo)){

                global $numero1 , $numero2;

                $resultado = $numero1 % $numero2;

                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }

            if(!strcmp("Incremento" , $calculo)){

                global $numero1;

                $numero1++;

                //flujo de ejecución: reemplaza el número introducido con el incremento
               // $resultado = $numero1;

                echo "<p class='resultado'> El resultado es: $numero1 </p>";
            }

            if(!strcmp("Decremento" , $calculo)){

                global $numero1;

                $numero1--;
                //flujo de ejecución
                //$resultado = $numero1;

                echo "<p class='resultado'> El resultado es: $numero1 </p>";
            }

        }

    ?>