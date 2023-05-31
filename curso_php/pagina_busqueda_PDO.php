<?php
    try{

        $base = new PDO ("mysql:host = localhost ; dbname=pruebas" , "root" , ""); 
        
        $base->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        echo "Conexión OK";

    }catch(Exception $e){

        //llamo a la función getMessage()
        //el objeto $e tiene una función getMessage()

        die("Conexión fallida: " . $e->getMessage());

    }finally{
        echo "<br>Vaciando la memoria para ahorrar recursos";
        $base = null; //vaciar la memoria
    }

?>