<?php

class controlTXT{

    public function controlarArchivoTXT($archivo){

        $archivoPermitido = [
            'text/plain'
        ];

        $tipoArchivo = $archivo['type'];

        $contenido = "";

        if (in_array($tipoArchivo, $archivoPermitido)) {
            
            $contenido = file_get_contents($archivo['tmp_name']);
        }else{
            $contenido = "Error.";
        }

        return $contenido;
    }
}

?>