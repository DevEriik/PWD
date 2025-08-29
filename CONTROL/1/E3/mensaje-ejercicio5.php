<?php

if ($_GET) {
    
    $tipoEstudio = $_GET['opciones'];
    $sexo = $_GET['tipo-sexo'];

    if ($tipoEstudio === "valor1") {
         echo "No posee estudios y su sexo es: " .$sexo;
    }elseif ($tipoEstudio === "valor2") {
        echo "Posee estudios primarios y su sexo es: " .$sexo;
    }else {
        echo "Posee estudios secundarios y su sexo es: " .$sexo;
    }
}

?>