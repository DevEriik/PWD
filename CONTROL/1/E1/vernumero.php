<?php 

if ($_POST) {
    $numero = $_POST['numero'];
    
    //!Validar del lado del servidor es crucial
    //! Aunque HTML y JS validen al cliente, esto previene manipulacion de los datos

    if (is_numeric($numero)) {
        $numero = (int)$numero; //* Convertir a entero

        if ($numero > 0) {
            echo "<p>El numero enviado $numero es positivo</p>";
        }elseif ($numero < 0) {
            echo "<p>El numero enviado $numero es negativo</p>";
        }else {
            echo "<p>El numero enviado $numero es cero</p>";
        }
    }
}else {
    echo "<p style='color: red;'>Error: El valor enviado no es un numero valido";
}
?>
<a href="../../../VISTA/1/E1/index.html">Volver al formulario</a>