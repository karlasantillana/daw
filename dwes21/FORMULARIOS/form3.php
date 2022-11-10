<html>
	<head>
	</head>	
	
	<body>
		<?php 	
       
        $nombre = ($_GET["nombre"]);  //para que afecte a todo
        if(isset ($_GET["enviar"])){
            
            switch ($_GET["estudios"]){
                case 1:
                    echo $nombre ."No tiene estudios <br>";
                    break;

                case 2:
                    echo $nombre ." Estudios primarios <br>";
                    break;
            }
        }

		?>

	</body>
</html>