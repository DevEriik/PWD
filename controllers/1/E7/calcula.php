<?php

if ($_GET) {
    
    $num1 = $_GET['valor1']; 
    $num2 = $_GET['valor2']; 
    $operacion = $_GET['operacion'];
    
    if ($operacion == "suma") {
        echo "OPERACION: SUMA <br> <br>"; 

        echo "PRIMER OPERANDO: " .$num1. "<br>"; 
        echo "SEGUNDO OPERANDO: " .$num2. "<br> <br>"; 
        
        $resultadoSuma = $num1 + $num2;

        echo "Resultado de la operacion: " .$resultadoSuma;
    }elseif ($operacion == "resta") {
        echo "OPERACION: RESTA <br> <br>"; 

        echo "PRIMER OPERANDO: " .$num1. "<br>"; 
        echo "SEGUNDO OPERANDO: " .$num2. "<br> <br>"; 
        
        $resultadoResta = $num1 - $num2;

        echo "Resultado de la operacion: " .$resultadoResta;
    }else {
        echo "OPERACION: MULTIPLICAR <br> <br>"; 

        echo "PRIMER OPERANDO: " .$num1. "<br>"; 
        echo "SEGUNDO OPERANDO: " .$num2. "<br> <br>"; 
        
        $resultadoMult = $num1 * $num2;

        echo "Resultado de la operacion: " .$resultadoMult;
    }
}

?>