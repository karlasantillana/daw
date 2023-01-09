<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
    //OBJETOS DE TIPO COCHE van a tener 3 atributos y 3 métodos
    
        class Coche {

            //propiedades = atributos del objeto coche
            var $ruedas;

            var $color;

            var $motor;

            //método Constructor
            //aquí indico el estado inicial de los objetos de tipo coche
            function __construct(){
                
                $this -> ruedas = 4; /////$this hace referencia a la clase Coche

                $this -> color = "";

                $this -> motor = 1600; 

            }

            //////métodos = función(dentro de una clase)
            function arrancar(){

                echo "Estoy arrancando<br>";

            }

            function girar(){

                echo "Estoy girando<br>";

            }

            function frenar(){

                echo "Estoy frenando<br>";

            }

            //método con parámetro
            function establecer_color($color_coche , $nombre_coche){

                $this->color = $color_coche; //almaceno en el atributo color lo que guardo en el parámetro $color_coche

                echo "El color de " .$nombre_coche . " es: " . $this->color . "<br>";

            }


        }

        
        //INSTANCIAS(ejemplares): //fuera de la clase 
        $renault = new Coche(); //le doy un estado inicial al objeto o instancia//se llama al método CONSTRUCTOR Coche

        $mazda = new Coche();

        $seat = new Coche();

        //paso parámetros al llamar a la función
        $renault->establecer_color("rojo" , "Renault"); //llamo a la función y le paso el valor de parámetro "rojo"

        $seat->establecer_color("azul" , "Seat");



        //llamada a un método
        //$mazda->girar();
        
        //llamada a un atributo de la clase
        //cuántas ruedas tiene un mazda? quiero acceder a un atributo de la clase Coche
        //echo $mazda ->ruedas;

    ?>
</body>
</html>