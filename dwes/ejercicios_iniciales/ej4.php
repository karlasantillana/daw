<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $bruto = 3750;

        $retencion = ($bruto*22)/100;

        $neto = $bruto - $retencion;

        echo "<b>sueldo inicial:</b> $bruto";
        echo "<br>";
        echo "<b>impuesto aplicado:</b> $retencion";
        echo "<br>";
        echo "<b>sueldo neto:</b> $neto";

    ?>
</body>
</html>