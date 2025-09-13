<?php

class controlEdad{ 

    public function registrarEdad($edad){

        if ($edad >= 18) {
            $resultado = "es mayor de edad.";
        } elseif ($edad >= 0 && $edad < 18) {
            $resultado = "es menor de edad.";
        } else{
            $resultado = "Error.";
        }

        return $resultado;
    }
}

?>