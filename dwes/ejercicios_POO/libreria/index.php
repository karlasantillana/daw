<!-- 
Crea un objeto Publisher con el valor de las variables que desees.
Crea un objeto Book y un objeto Magazine con el valor de las variables que desees, muéstralas en una 
web php, actualízalas y vuelve a mostrarlas por pantalla.
Añade las siguientes funcionalidades y prueba los métodos con alguna instancia.
a) Incluye una función de ordenación utilizando el algoritmo BubbleSort (ordenación de libros 
por precio ascendente o descendente)
b) Realiza un método de ordenación por orden alfabético del título.
c) Ordena por orden alfabético al menos 5 referencias (a introducir en el array de libros o 
magazines).
d) Método de búsqueda en el array de libros o magazines por autor.
e) Método de búsqueda en el array de libros o magazines por título 
-->

<?php
include "readingMaterial.php";
include "publisher.php";


//objeto publisher
$publisher1 = new Publisher(0001 , "Karla Santillana" , "calle Fuencarral 31" , 913584067 , "www.santillana.com");

//objeto book
echo $book1 = new Book (20 , "Todo lo que nunca fuimos" , 352 , 16 ,   0001 , "Karla Santillana" , "calle Fuencarral 31" , 913584067 , "www.santillana.com"   , 21 , "Alice Kellen");

//objeto magazine
echo $magazine1 = new Magazine(30 , "Hola" , 23 , 3 , 0002 , "Eduardo Sánchez" , "calle Bravo Murillo 42" , "913584000" , "www.eduardosanchez.es" , "tapa blanda");
?>