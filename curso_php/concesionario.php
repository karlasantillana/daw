<?php

/*
Concesionario: vende vehículos con precios 
según la gama, 
según extras(con climatizador, navegador gps, tapicería cuero),
añadiendo una ayuda del gobierno que se le resta al precio final independientemente del tipo de coche que sea
(opción1: crear una variable static la cual se comparte con todas las instancias de la clase)
*/

    class Compra_vehiculo{

        private $precio_base;

        //private static $ayuda=4500; ////variable (= campo) static
        private static $ayuda=0; 

        function __construct($gama){

            if ($gama=="urbano"){

                $this->precio_base=10000;


            }else if($gama=="compacto"){

                $this->precio_base=20000;


            }else if($gama=="berlina"){

                $this->precio_base=30000;
            }

        }//fin construct

        //MÉTODO STATIC si el descuento se hiciese por épocas
        static function descuento_gobierno(){       

            if(date("d-m-Y") >"20-01-2023"){
                
                self::$ayuda=4500;

            }//fin condición

        }//fin método static

        //MÉTODOS
        function climatizador(){

            $this->precio_base+=2000;

        }//fin climatizador


        function navegador_gps(){

            $this->precio_base+=2500;

        }//fin navegador gps


        function tapiceria_cuero($color){

            if($color=="blanco"){

                $this->precio_base+=3000;
            }

            else if($color=="beige"){
                
                $this->precio_base+=3500;
            }

            else{ //cualquier otro color

                $this->precio_base+=5000;
            }
    
        }//fin tapicería


        function precio_final(){

            $valor_final = $this->precio_base - self::$ayuda; //para usar la variable static $ayuda, tengo q usar self::

        //     return $this->precio_base;
            return $valor_final;            

        }//fin precio final

    }//fin Clase
?>