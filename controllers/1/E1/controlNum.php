<?php

class controlNum{

    public function verificarNum($numero){
        if ($numero == 0) {
            $resultado = "0";
        }elseif ($numero > 0) {
            $resultado = "Positivo";
        }else {
            $resultado = "Negativo";
        }
        return $resultado;
    }
}


?>