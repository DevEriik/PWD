<?php

    if (isset($_GET)) {
        
        $edad = $_GET['edad-est'];
        $estudiante = $_GET['estudiantes'];

        //* Si es estudiante y mayor o igual de 12 anios el precio es de $180
        if ($estudiante == "valor1" && $edad >= 12) {
            
            echo "El valor de su entrada es de $180.";

        } //* Si es estudiante o menor de 12 anios el precio es $160
        elseif ($estudiante == "valor1" || $edad > 12) {
            
            echo "El valor de su entrada es de $160.";

        }else {
            echo "El valor de su entrada es de $300.";
        }
    }

?>
    <br> <br>
    <a href="index.php">Limpiar formulario y volver a consultar</a>