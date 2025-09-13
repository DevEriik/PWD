<?php 

class controlEstudio{

    public function tipoEstudio($valueEstudio){

        if ($valueEstudio === "No tiene estudio") {
            $resultado = "No posee estudios.";
        } elseif ($valueEstudio === "Estudios Primarios") {
            $resultado = "Posee estudios primarios";
        }else{
            $resultado = "Posee estudios secundarios";
        }

        return $resultado;
    }
}

?>