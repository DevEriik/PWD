<?php

if ($_POST) {
    
    $nombre = $_POST['nombre_form'];
    $apellido = $_POST['apellido_form'];
    $edad = $_POST['edad_form'];
    $direccion = $_POST['direccion_form'];

    echo "Hola, yo soy " .$nombre. ", " .$apellido . " tengo " .$edad. " años y vivo en " .$direccion;
}

?>