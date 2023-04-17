<!-- Realizar un programa en php donde se declare la variable posición. Esta variable puede 
tomar los valores arriba o abajo. Imprimir el valor que toma variable. Si no toma ninguno 
de estos dos valores imprimir por pantalla: “La variable contiene otro valor distinto de 
arriba y abajo”. Realizar el ejercicio utilizando la sentencia SWITCH -->

    <?php
    
        $posicion = "detrás";

        switch($posicion){

            case "arriba":
                echo "su posición es arriba";
            break;
            
            case "abajo":
                echo "su posición es abajo";
            break;
            
            default:
                echo "La variable contiene otro valor distinto de arriba y abajo,";
        }
    ?>
