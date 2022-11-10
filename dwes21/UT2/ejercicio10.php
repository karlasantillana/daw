
<html>
	<head>

	</head>
	
	
	<body>
		<?php 
		/*
		Realizar un programa en php que escriba por pantalla la sucesión de Fibonacci. 
		Cada número de la serie de Fibonacci se forma sumando los dos números anteriores
		*/
		
		$serieFibonacci =[]; //lista vacía
		
		$serieFibonacci[0] =0; //posición 1
		$serieFibonacci[1] =1; //posición 2
		
		for($i=2 ; $i<30 ; $i++){
			
			$serieFibonacci[$i] = ($serieFibonacci[$i-1]) + ($serieFibonacci[$i-2]);
		}
		
		echo "<pre>"; //para q se vea en orden hacia abajo y no lineal
		print_r($serieFibonacci);
		echo "</pre>";


		

		?>

	<body>
</html>