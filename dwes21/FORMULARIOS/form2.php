<html>
	<head>
	</head>
		
	<body>
        <?php 
		/*Crear un formulario que solicite el nombre de persona y su edad, 
		luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18). 
		Utiliza el método GET.*/

		echo $_GET["nombre"];
  		echo "<br>";

  		if ($_GET["edad"] >= 18) {
    		echo "Es mayor de edad";
  		} else {
    		echo "No es mayor de edad";
 		}
        ?>

	</body>
</html>
