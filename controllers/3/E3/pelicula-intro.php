<?php

    //?Definimos carpeta destino
    $fileDestinity = '../../../assets/img/';

    //? Respuesta
    $answer = [
        'exito' => false, 
        'error' => 'No se ha cargado ningun archivo'
    ]; 

    if (isset($_FILES['input-file']) && $_FILES['input-file']['error'] === UPLOAD_ERR_OK) {
        
        $routTemporaly = $_FILES['input-file']['tmp_name'];
        $nameOriginal = basename($_FILES['input-file']['name']);
        $routFinal = $fileDestinity . $nameOriginal;

        if (move_uploaded_file($routTemporaly, $routFinal)) {
            
            $answer['exito'] = true; 
            $answer['url_imagen'] = $routFinal;
            $answer['datos_pelicula'] = $_POST;
        }else{
            $answer['error'] = 'Error al guardar la imagen.';
        }
    }

    //?Enviamos la respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($answer);

?>
