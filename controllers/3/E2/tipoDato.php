<?php

//? Se verifica que exista el FILE

if (isset($_FILES['input-txt']) && $_FILES['input-txt']['error'] === UPLOAD_ERR_OK ) {
    
    $nameFile = $_FILES['input-txt']['name']; //*Nombre archivo
    $typeArchive = $_FILES['input-txt']['type']; //*Tipo de archivo
    $routeTemporary = $_FILES['input-txt']['tmp_name']; //*Ruta temporal del archivo

    //?Tipo de MIME

    $typePermitted = ['text/plain'];

    //?Validamos que sea de tipo txt

    $formatIsValid = in_array($typeArchive, $typePermitted);

    if ($formatIsValid) {
        $fileContent = file_get_contents($routeTemporary);

        $message = $fileContent;
    }else{
        $message = "Error: El archivo no es de tipo texto plano (.txt).";
    }
}else{
    $message = "Error: No se cargo ningun archivo.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo TXT</title>
</head>
<body>
    <div>
        <textarea rows="10" cols="40">
            <?php 
                echo htmlspecialchars($message)
            ?>
        </textarea>
    </div>
    
</body>
</html>