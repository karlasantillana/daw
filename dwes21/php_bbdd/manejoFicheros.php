<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de ficheros</title>
</head>
<body>
    <p>Operación de lectura</p>
    <br>
    <br>

    
    <?php
    /* 
    1. fOpen("ruta" , "permisos");
    2. validar fOpen --> abrir el fichero correctamente
    3. leer fichero fRead --> variable donde guardo el fOpen, cantidad de bits a leer.
        Para mostrar todo el contenido se pone fileSize("nombre_fichero")
    4. escribir fichero --> fWrite(donde voy a escribir lo que quiero escribir)
    */

        $archivo = fopen("fichero1.txt" , "r+b"); //r:lectura  b:salto de línea

        if(!$archivo){
            echo "Error al abrir el fichero";
    
        }

        // $cadena=fread($archivo , 4);
        // echo $cadena;

        $cadena = fread($archivo , filesize("fichero1.txt"));
        echo $cadena;

        fwrite($archivo , "pero es bueno\n");

        echo $cadena;


        $archivo2 = fopen("fichero1.txt" , "r+b");

        $cadena2 = fread($archivo2 , filesize("fichero1.txt"));
        echo $cadena2;

        echo "<br>------------------------------------------<br>";


        // $pagina = file_get_contents("https://elpais.com/");
        // echo $pagina;

        $aCadena = file("fichero1.txt");
        print_r ($aCadena);

        echo "<br>------------------------------------------<br>";

        while(feof($archivo2) == false){
            echo fgets($archivo2);
            echo "<br>";
        }

        fclose($archivo);


    ?>
</body>
</html>