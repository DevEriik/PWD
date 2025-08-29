<?php
    //? Verificamos que exista el FILE y que se alla subido correctamente al servidor sin errores.

    if (isset($_FILES['form-subir']) && $_FILES['form-subir']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['form-subir']['name'];
        $tipoArchivo = $_FILES['form-subir']['type'];
        $tamanioArchivo = $_FILES['form-subir']['size'];
        $rutaTemporal = $_FILES['form-subir']['tmp_name'];

        //? Definimos tipo de MIME permitidos. 

        $tiposPermitidos = [
            'application/pdf',
            'application/msword'
        ];

        //? Definimos tamaño permitido en bytes (2MB)

        $tamanoMaximo = 2097152;

        //? Verificamos si el tipo de archivo esta en nuestra lista de permitidos

        $esTipoValido = in_array($tipoArchivo, $tiposPermitidos);

        //? Verificamos si el tamaño del archivo es menor o igual al maximo permitido

        $esTamanoValido = ($tamanioArchivo <= $tamanoMaximo);

        //? Verificamos ambas condiciones 

        if ($esTipoValido && $esTamanoValido) {

            //? Creamos la ruta de destino. La carpeta "uploads" debe existir.
            $rutaDestino = "uploads/" . basename($nombreArchivo);

            if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                //!Si es exitoso creo el mensaje con el enlace. 
                $mensaje = "¡Archivo subido con éxito! Haz clic <a href='" . htmlspecialchars($rutaDestino) . "' target='_blank'>aquí</a> para verlo.";
            }else{
                //!Error al mover el archivo
                $mensaje = "Error al mover el archivo a la carpeta de destino.";
            }
        }else{
            //!Si no se cumple alguna condicion. 
            $mensaje = "Error: El archivo no es tipo .doc o .pdf o excede los 2MB";
        }
    }else{
        //!Si no se cumple
        $mensaje = "Error: No se pudo subir el archivo o no se seleccionó ninguno.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Subida</title>
</head>
<body>
    <h1>Resultado</h1>
    <p><?php echo $mensaje; ?></p>
</body>
</html>