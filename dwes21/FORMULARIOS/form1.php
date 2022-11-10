<html>
        <head>
	</head>
		
	<body>
        <?php
        /* El número de veces indicado en el cuadro de texto tendrá que imprimirse la frase “Los bucles son fáciles”. Para finalizar se escribirá por pantalla la frase “Se acabó”.
        • El código php y el código html deberán de estar en dos ficheros distintos.
        • Utilizar la sentencia WHILE
        • Para recoger el dato metido en el cuadro de texto se utiliza la instrucción $_POST.
        Ejemplo: $number = $_POST['number']; siendo number el name puesto al cuadro de texto.*/      

        if (isset ($_POST["Enviar"])) { 

              $number = ($_POST["number"]);

              while($number >0){
                      echo “Los bucles son fáciles”;
                      $number++ ;
              }            
        }
        ?>


        </body>
</html>
