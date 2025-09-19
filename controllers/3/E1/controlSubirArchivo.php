<?php

class controlSubirArchivo{

    public function controlarArchivo($archivo){ 
        

        $rutaTemporal = $archivo['tmp_name'];

        //? Definimos tipo de MIME permitidos. 
        $tiposPermitidos = [
            'application/pdf',
            'application/msword'
        ];

        //? Definimos tamaño permitido en bytes (2MB)
        $tamanoMaximo = 2097152;

        $esTipoValido = in_array($archivo['type'], $tiposPermitidos);

        $esTamanioValido = ($archivo['size'] <= $tamanoMaximo);

        
        $resultado = "No entro al IF";
        //?Si ambos son validos
        if ($esTipoValido && $esTamanioValido) {

            $nombreArchivo = basename($archivo['name']);
            
            $rutaDestino = __DIR__ . "/../../../assets/uploads/" . $nombreArchivo;

            $resultado = "Entro al IF";

            if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                
                $resultado = "Entro al 2do IF";
            }else{
                $resultado = "Error al subir archivo.";
            }
        }

        return $resultado;

    }
}