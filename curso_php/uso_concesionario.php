<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>
<body>
    <?php
        include("concesionario.php");


        //INSTANCIAS

        //Cliente 1.Un coche comprado por Juan de gama compacto(20000 €) sin añadir extras
        $compra_Juan = new Compra_vehiculo("compacto");
        
        echo $compra_Juan->precio_final();
        
        echo "<br><br><br>";


        //Cliente 2.Un coche comprado por Antonio de gama compacto(20000 €) con extra climatizador y tapicería de cuero(color blanco)
        $compra_Antonio = new Compra_vehiculo("compacto");

        $compra_Antonio->climatizador();
        $compra_Antonio->tapiceria_cuero("blanco");

        echo $compra_Antonio->precio_final();

        echo "<br><br><br>";
        
        
        //Cliente 3.Un coche comprado por Ana de gama compacto(20000 €) con extra climatizador y tapicería de cuero(color rojo)
        $compra_Ana = new Compra_vehiculo("compacto");

        $compra_Ana->climatizador();
        $compra_Ana->tapiceria_cuero("rojo");

        echo $compra_Ana->precio_final();


        


        
    
    ?>
</body>
</html>