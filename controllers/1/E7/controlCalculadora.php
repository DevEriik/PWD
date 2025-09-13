<?php

class controlCalculadora{

    public function realizarOperacion($num1, $num2, $operando){

        if ($operando === "suma") {
            $resultado = $num1 + $num2;
        } elseif ($operando === "resta") {
            $resultado = $num1 - $num2;
        }else{
            $resultado = $num1 * $num2;
        }

        return $resultado;
    }
}

?>