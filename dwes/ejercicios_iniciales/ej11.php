<!-- 
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
-->

<?php
//con STRING
$frase="Estamos dando nuestros primeros pasos en programación utilizando el lenguaje PHP";
echo "<b> $frase </b> <br><br>";


echo mb_strlen($frase) . "<br><br>"; //-->para carcateres multibyte (tildes, diéresis, etc)

echo strstr($frase , "os") . "<br><br>";

$posicion = strpos($frase , "nuestros");
echo "La palabra \"nuestros\" en la cadena '$frase', se encuentra en la posición $posicion <br><br>";

echo mb_substr($frase, 68) . "<br><br>";

echo mb_substr($frase, 13 , 24) . "<br><br>";

echo str_replace("Estamos dando nuestros" , "Estoy dando mis" , $frase) . "<br><br>";

echo strtolower($frase) . "<br><br>";

echo strtoupper($frase) . "<br><br>";

echo ucwords($frase) . "<br><br>";


echo "<br><br>";


//con ARRAY
$caracteres = mb_str_split($frase); //mb_   -->para carcateres multibyte (tildes, diéresis, etc)
print_r($caracteres);

echo count($caracteres) . "<br><br>";





?>