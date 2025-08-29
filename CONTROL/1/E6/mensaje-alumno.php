<?php

if ($_GET) {
    
    $deportes = $_GET['deporte'];
   
    $totalDeportes = count($deportes);

    echo "La cantidad de deportes que practica el alumno es de: " .$totalDeportes;
}

?>