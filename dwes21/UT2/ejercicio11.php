
<html>
	<head>

	</head>
	
	
	<body>
		<?php 
		/*
		Realiza un programa en php donde dada la cadena: “Estamos dando nuestros primeros
		pasos en programación utilizando el lenguaje php” imprima por pantalla:
			• La longitud de la cadena.
			• La primera ocurrencia de “os”.
			• La búsqueda de la palabra “nuestros”.
			• La subcadena “lenguaje php”.
			• La subcadena “nuestros primeros pasos”.
			• El reemplazo de las palabras estamos por estoy y nuestros por mis.
			• Todas las letras de la cadena en minúsculas.
			• Todas las letras de la cadena en mayúsculas
			• La frase con todas las letras iniciales de cada palabra en mayúscula.
		*/
		
		$string = "Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php";
		echo mb_strlen ($string) ."<br>"; //mb_  Longitud de la cadena, cuenta la cantidad de los caracteres de la oración
		echo mb_strpos ($string, "os") . "<br>"; // mb_strpos Posición de la ocurrencia. Entre paréntesis el string donde lo voy a buscar, coma, "lo que quiero buscar"
		echo stristr($string, "nuestros") . "<br>"; //lo que  me aparece en el resto de la frase desde la palabra "nuestro"
		echo stristr ($string, "lenguaje php"). "<br>";
		echo stristr ($string, "nuestros primeros pasos"). "<br>";
		
		$string = str_ireplace("Estamos", "Estoy", $string); //** str_ireplace Para modificar una palabra sin importar mayus o minusc
		$string = str_ireplace("nuestros", "mis",$string);
		echo $string . "<br>";
		
		echo strtoupper ($string) . "<br>"; //**MAYÚSCULAS
		echo strtolower ($string) . "<br>"; //**minúsculas
		
		
		$string = ucwords ($string); //ucwords solo la inicial de cada palabra en MAYUS
		echo $string;
		
		
		?>

	<body>
</html>