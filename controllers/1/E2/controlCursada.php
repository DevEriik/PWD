<?php

class controlCursada{
    public function calcularCargaHoraria($cronograma){

        $cargaHoraria = 0; 

        $semana = [];
        $semana[0] = $cronograma['lunes'];
        $semana[1] = $cronograma['martes'];                
        $semana[2] = $cronograma['miercoles'];
        $semana[3] = $cronograma['jueves'];
        $semana[4] = $cronograma['viernes'];

        foreach ($semana as $dia) {
            $cargaHoraria = $cargaHoraria + $dia;
        }

        return $cargaHoraria;
    }
}

?>