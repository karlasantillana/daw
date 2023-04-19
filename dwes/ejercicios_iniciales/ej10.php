<!-- Realizar un programa en php que escriba por pantalla la sucesión de Fibonacci. Cada 
número de la serie de Fibonacci se forma sumando los dos números anteriores
0, 1, 1, 2, 3, 5, 8, 13...
fibo(n) = fibo(n-1) + fibo(n-2)
-->
    
<?php 
/*
    $num1 = 0;
    $num2 = 1;
    $fibonacci; //contenedor con resultado de suma

    echo $num1 . "<br>" . $num2 . "<br>";

    for ($i =0 ; $i<25 ; $i++){
        $fibonacci = $num1 + $num2;
        $num1 = $num2;
        $num2= $fibonacci;

        echo $fibonacci . "<br>";
    }
*/


    
    //$fibonacci= array(0,1);
    $fibonacci []=0;
    $fibonacci []=1;


    for($i=2 ; $i<25 ; $i++){

    $fibonacci[$i]= ($fibonacci[$i-1]) + ($fibonacci[$i-2]); //lo que guarda es la posición mas no el elemento

    }
    

/*
    $num1 = 0;
    $num2 = 1;
    $fibonacci = []; //contenedor 

    for ($i = 0; $i < 25; $i++) {
        $fibonacci[] = $num1;

        $next = $num1 + $num2;
        $num1 = $num2;
        $num2 = $next;
    }
*/

    echo "<pre>"; //para q se vea en orden hacia abajo y no lineal
    print_r($fibonacci); //imprimir array
    echo "</pre>";

?>