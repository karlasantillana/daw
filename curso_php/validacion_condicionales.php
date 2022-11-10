<link rel="StyleSheet" href="style_val.css" type="text/css" media="screen">

<?php
    
    if(isset($_POST["enviando"])){

        $nombre = $_POST["nombre_usuario"];
        //$contra = $_POST["contra_usuario"]; 
        $edad = $_POST["edad_usuario"];

        switch (true){

            case $edad <= 18:

                echo "Eres menor de edad";

                break;

            case $edad <=40:

                echo "Eres joven";

                break;

            case $edad <=65:

                echo "Eres maduro";
    
                break;
            
            default:

                echo "Cuídate";

        }

        
        /*
        if($edad<=18){

            echo "Eres menor de edad";

        }else if($edad <=40){

            echo "Eres joven";

        }else if($edad <=65){

            echo "Eres maduro";

        }else{

            echo "Cuídate";
        }
        
        */

        
    }
?>