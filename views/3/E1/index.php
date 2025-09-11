<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Boostrap-CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/3/E1/layout.css">
    <title>Subir Archivo</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
        <div class=" container">
            <h3>Formulario subida de archivos...</h3>
            <form name="form-subir" id="form-subir" method="POST" action="../../../controllers/3/E1/validarTipoDoc.php" enctype="multipart/form-data">
                <div class="mb-3 input-file">
                    <input type="file" name="form-subir">
                </div>

                <div class="button-form">
                    <button class="btn btn-dark" type="submit">Subir Archivo</button>
                </div>
            </form>
        </div>
</div>


    <script href="../../../Boostrap-JS/bootstrap.bundle.min.js"></script>
</body>
</html>