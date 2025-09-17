<?php

class controlSubirArchivo{

    public function controlarArchivo($archivo){ 

        $rutaTemporal = $_FILES['tmp_name'];

        //? Definimos tipo de MIME permitidos. 
        $tiposPermitidos = [
            'application/pdf',
            'application/msword'
        ];

        //? Definimos tamaño permitido en bytes (2MB)
        $tamanoMaximo = 2097152;

        $esTipoValido = in_array($archivo['type'], $tiposPermitidos);

        $esTamanioValido = ($archivo['size'] <= $tamanoMaximo);

        $resultado = false;

        //?Si ambos son validos
        if ($esTipoValido && $esTamanioValido) {
            
            $rutaDestino = "/PWD/assets/uploads" . basename($archivo['name']);

            if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                
                $resultado = true;
            }
        }

        return $resultado;

    }
}