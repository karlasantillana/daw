<html>
	<head>
	</head>	
	
	<body>
		<?php 	
        if (isset ($_POST['Enviar'])) {  // isset para comprobar que no es NULL
            //$_POST lee el dato metido por teclado

        $euro = ($_POST["cantidad"]);
        $euro = str_replace ("," , "." , $euro); //para reemplazar
        switch ($_POST['moneda'])
            {
            case 1:
                 //1º guardo la cantidad en euros
                $bitcoin = $euro * 0.00012; //decimales siempre con punto
                echo "La conversión de la cantidad que ha introducido, resulta " . $bitcoin ." ₿";
                break;

            case 2:               
                $dolar = $euro * 1.12;
                echo "La conversión de la cantidad que ha introducido, resulta " . $dolar ." $";
                break;

            case 3:                
                $libra = $euro * 0.86;
                echo "La conversión de la cantidad que ha introducido, resulta " . $dolar . " £";
                break;

            case 4:             
                $yen = $euro * 120.82; 
                echo "La conversión de la cantidad que ha introducido, resulta " . $yen . " ¥";
                break;

            default:
                echo "Bye bye";
            }
        }
		?>

	</body>
</html>