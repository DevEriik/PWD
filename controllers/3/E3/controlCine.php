<?php

class controlCine{

    public function controlarImg($archivo){


        //? Definir los tipos de MIME permitidos para imágenes
        $tiposPermitidos = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ];

        //? Definir el tamaño máximo permitido (por ejemplo, 5MB)
        $tamanoMaximo = 5 * 1024 * 1024; // 5 MB en bytes

        $esTipoValido = in_array($archivo['type'], $tiposPermitidos);
        $esTamanioValido = ($archivo['size'] <= $tamanoMaximo);

        
        if ($esTipoValido && $esTamanioValido) {
            
            // **CORRECCIÓN:** Definir $nombreArchivo aquí
            $nombreArchivo = uniqid('portada_') . '_' . basename($archivo['name']);

            //? Ruta de destino, relativa a la raíz del proyecto
            $rutaDestino = __DIR__ . "/../../../assets/img/" . $nombreArchivo;


            
            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                //? Devolver el nombre del archivo guardado para usarlo más tarde
                return $nombreArchivo;
            }else{
                return "Error.";
            }
        }
    }
}

?>
