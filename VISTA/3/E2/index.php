<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/3/E2/layout.css">
    <link rel="stylesheet" href="../../../Boostrap-CSS/bootstrap.min.css">
    <title>Documento TXT</title>
</head>
<body>
    
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="">
        <h3>Archivos TXT</h3>
        
        <form method="POST" action="../../../CONTROL/3/E2/tipoDato.php" enctype="multipart/form-data">
            <div class="mb-3">
                <input name="input-txt" type="file">
            </div>
            <div>
                <button type="submit">Enviar archivo</button>
            </div>
        </form>
    </div>
</div>

    <script src="../../../Boostrap-JS/bootstrap.bundle.min.js"></script>
</body>
</html>