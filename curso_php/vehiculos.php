<!-- este archivo va incluído en poo_1.php -->
<?php
    class Coche {

        //propiedades = atributos del objeto coche
        protected $ruedas;

        var $color; //VAR por defecto es modificador de acceso PUBLIC

        protected $motor;

        //método Constructor
        //es donde se indica el ESTADO INICIAL de los objetos de tipo Coche
        function __construct(){
            //$this -> indica que hace referencia a la clase Coche
            $this -> ruedas = 4;

            $this -> color = ""; //estado inicial sin definir

            $this -> motor = 1600; 

        }

        ////////// (permite ver las propiedades del objeto de la clase)////////
        function get_ruedas(){ ///función getter

            return $this->ruedas;
        }   


        function get_motor(){

            return $this->motor;

        }
        //////////


        //métodos = función(dentro de una clase)
        function arrancar(){

            echo "Estoy arrancando<br>";

        }

        function girar(){

            echo "Estoy girando<br>";

        }

        function frenar(){

            echo "Estoy frenando<br>";

        }

        //método con parámetro  //para el color sin definir en el estado inicial del constructor
        function establecer_color($color_coche , $nombre_coche){ //MÉTODO SETTER

            $this->color = $color_coche; //asigno al atributo color lo que he guardado en el parámetro $color_coche

            echo "El color de " .$nombre_coche . " es: " . $this->color . "<br>";

        }


    }

    //------------------HERENCIA--------------------------------------------------------------//

    class Camion extends Coche{


        function __construct(){ //Método constructor
            
            $this -> ruedas = 8;

            $this -> color = "gris";

            $this -> motor = 2600; 

        }
 
        /////sobrescritura de métodos////
        function establecer_color($color_camion , $nombre_camion){

            $this->color = $color_camion;

            echo "El color de " . $nombre_camion . " es: " . $this->color . "<br>";
        }

        ///instrucción parent
        function arrancar(){

            parent::arrancar(); //primero, hace lo que indica el método arrancar()

            echo "Camión arrancado"; //segundo, hace lo q se le indica.

        }
        
    }

?>