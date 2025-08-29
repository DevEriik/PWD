<?php

if ($_GET) {
    
    $edad = $_GET['edad_form'];
    
    if ($edad < 18) {
        echo "Eres menor de edad. ";
    }else{
        echo "Eres mayor de edad. ";
    }
}

?>