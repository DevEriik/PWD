<?php

class controlDeporte{

    public function cantDeportes($deportes){
        
        $resultado = count($deportes);

        return $resultado;
    }
}

?>