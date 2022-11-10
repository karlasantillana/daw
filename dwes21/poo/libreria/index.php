<!-- 
-Crea un objeto Publisher con el valor de las variables que desees.
-Crea un objeto Book y un objeto Magazine con el valor de las variables que desees, 
muéstralas en una web php, actualízalas y vuelve a mostrarlas por pantalla.

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
// include 'readingMaterial.php';
include 'readingMaterial2.php';
//include 'publisher.php'; //no hace falta ya que readinMaterial.php ya lo importa.
include 'book.php';
include 'magazine.php';

//creo objeto Publisher
$publisher1 = new Publisher(001,"Gerar","c/ Antonio Robles 48", 630000000, "www.gerar.com");

//creo objeto Book
$book1 = new Book(48, "Elísabet Benavent", 0001 , "Todas las cosas que te diré mañana" , 96 , 17 , 002 , "Karla" , "c/ Orense 14" , 6500000000 , "www.karla.com");
$book2 = new Book(50, "Albert Espinosa", 0003 , "El libro amarillo" , 84 , 14 , 003 , "Blanca" , "c/ Raimundo Fernández 42" , 6600000000 , "www.blanca.com");
$book3 = new Book(12, "Pepito", 0004 , "La muerte anunciada" , 83 , 15 , 003 , "Blanca" , "c/ Raimundo Fernández 42" , 6600000000 , "www.blanca.com");

//creo objeto Magazine //puedo incluir el objeto $publisher1
//$magazine1 = new Magazine("Linkedin", 0002 , "Cuore" , 102 , 16 , 001,"Gerar","c/ Antonio Robles 48", 630000000, "www.gerar.com");
$magazine1 = new Magazine("Linkedin", 0002 , "Cuore" , 102 , 16 , $publisher1);

echo "<pre>";
print_r($book1);
echo "<br>";
print_r($magazine1);
echo "</pre>";

//a)Orden precio. función de ordenación utilizando el algoritmo BubbleSort //ascendente
function ordenaArray($array){

	$numElemArray = count($array);
	$isOrdered = false;
	while(!$isOrdered){
	$isOrdered = true;
		for($i = 1; $i < $numElemArray; $i++){
			if($array[$i] -> get_price() < $array[$i - 1] -> get_price()){
				$aux = $array[$i]->get_price();
				$array[$i] -> set_price($array[$i - 1] -> get_price());
				$array[$i - 1] -> set_price ($aux);	
				$isOrdered = false;
			}
		}		
	}	
	return $array;	
}

//creo un array
$arraylibros = array($book1 , $book2 , $book3);

//llamo a la función y le paso la función array
ordenaArray($arraylibros);
echo "<pre>";
print_r($arraylibros);
echo "</pre>";

//b)Orden alfabético título


?>