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
    
        class Coche {

            //propiedades = atributos del objeto coche
            var $ruedas;

            var $color;

            var $motor;

            //método CONSTRUCTOR 
            function Coche(){

                $this->ruedas=4;

                $this->color="";

                $this->motor=1600;


            }

            //métodos = función(dentro de una clase)
            function arrancar(){

                echo "Estoy arrancando";

            }

            function girar(){

                echo "Estoy girando";

            }

            function frenar(){

                echo "Estoy frenando";

            }


        }

        //INSTANCIAS(ejemplares):
        $renault = new Coche (); //le doy un estado inicial al objeto o instancia//se llama al método CONSTRUCTOR Coche

        $ferrari = new Coche();

        $seat = new Coche();

        //llamada a un método


    ?>
</body>
</html>