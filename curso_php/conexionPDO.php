<?php

/*
    //creo variable, instancio clase PDO
            ARGUMENTOS: 
            //1er arg-->host con el que quiero conectar y nombre de la bbdd
            //2do arg-->nombre de usuario
            //3er arg-->password

    //Conexión satisfactoria
            
*/

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
    //en este caso, si entra al catch, no se llega a realizar el finally ya que llega a entrar al die()
    
?>