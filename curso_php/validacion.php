<link rel="StyleSheet" href="style_val.css" type="text/css" media=screen >

<?php
    if (isset($_POST["enviando"])) {

        $usuario = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];

        if ($usuario == "Karla" && $edad >= 18) {

            echo "<p class='validado'>Puedes acceder</p>";
        } else {

            echo "<p class=\"no_validado\">No puedes acceder</p>";
        }
    }

?>