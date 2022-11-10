<?php


   //******MÉTODOS(funciones) ****************/

    //CONSTRUCTOR Coche
    function __construct (){
        this->ruedas = 4;
        this->color = "verde";
        this->motor = 3600;
    }


    /////////Función 1 ///////////
    function arrancar(){
        echo "Estoy arrancando </br>";
    }

    /////////Función 2 ////////////////
    function girar(){
        echo "Girando </br>";
    }
}


//******Clase Moto********/
class Moto extends Coche{
    
    //CONSTRUCTOR Moto
    function __construct () {
        this->ruedas = 2;
        this->color = "roja";
        this->motor = 1200;
    }


    //Override //Método sobreescrito
    function girar(){
        parent::girar();
        echo "la moto </br>";
    }

    function establece_color($color_moto){
        $this-> color = $color_moto;
    }

?>