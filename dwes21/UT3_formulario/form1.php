<?php
//variable superglobal=$_get
    $i=0;
    if(isset($_POST['numero'])){ //función isset: compueba que se ha metido lo que se solicita
        
        while($i<$_POST['numero']){
            echo "Los bucles son fáciles<br>";
            $i++;
        }
        echo " Se acabó";
        
    }
?>