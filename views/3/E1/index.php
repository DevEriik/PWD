<?php

//?Obtengo datos de la URL
$resultado = $_GET['resultado'] ?? null;

?>

<main class="container">
    <div class="d-flex justify-content-center align-items-center vh-100">
            <div>
                <h3>Formulario subida de archivos...</h3>
                <form name="form-subir" id="form-subir" method="POST" action="/PWD/views/action/actionForm.php" enctype="multipart/form-data">
                    <input type="hidden" name="accion" value="tp3e1">
                    <div class="mb-3 input-file">
                        <input type="file" name="form-subir">
                    </div>

                    <div class="button-form">
                        <button class="btn btn-dark" type="submit">Subir Archivo</button>
                    </div>
                </form>
            </div>
    </div>
    <?php

    if ($resultado !== null) {?>
        
            <div class="alert alert-success  mx-5">
               <?php echo htmlspecialchars($resultado) ?>
            </div>
        <?php
    }
    
    ?>
    <div class="mb-5 d-flex justify-content-center">
        <a href="?page=tp3" class="btn btn-danger"> 🡨 </a>
    </div>
</main>