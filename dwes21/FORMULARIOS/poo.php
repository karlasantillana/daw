<?php

//******Clase Coche********/
class Coche {
    //var  es PUBLIC
    /////// PROPIEDADES (variables)
    var $ruedas;
    var $color;
    var $motor;

    //******MÉTODOS(funciones) ****************/

    //CONSTRUCTOR Coche
    function __construct (){
        this->ruedas = 4;
        this->color = "verde";
        this->motor = 3600;
    }


    /////////Función 1 ///////////
    function arrancar(){
        echo "Estoy arrancando";
    }

    /////////Función 2 ////////////////
    function girar(){
        echo "Girando";
    }
}


//******Clase Moto********/
class Moto extends Coche{
    
    //CONSTRUCTOR Moto
    function __construct () {
        this->ruedas = 2;
        this->color = "verde";
        this->motor = 3600;
    }


//-----------------------------------------------------------------------------------//

//Llamar la instancia(objeto) de la clase
//la forma de concretar una clase através del constructor

$renault = new Coche();

//para acceder a la instancia del coche
$renault -> arrancar(); //para acceder a un método

echo "Las ruedas son " . $renault -> ruedas. "</br>"; //para acceder a una propiedad (sin punto y coma)
?>