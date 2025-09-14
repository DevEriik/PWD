<?php

class controlEdadEstudio{ 

    public function controlarEdadEstudio($edad, $estudio){

        if ($estudio === "valor1" && $edad >= 12) {
            $resultado = "El precio de la entrada es de $180.";
        } elseif ($estudio === "valor1" || $edad < 11) {
            $resultado = "El precio de la entrada es de $160.";
        }else{
            $resultado = "El precio de la entrada es de $300.";
        }
        
        return $resultado;
    }
}

?>