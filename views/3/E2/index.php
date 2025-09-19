<?php
//?Obtenemos datos enviados por URL
$resultado = $_GET['resultado'] ?? null;

?>

<main class="container my-5">
    <div class="d-flex justify-content-center align-items-center">
        <div class="">
            <h3 class="my-3">Archivos TXT</h3>
            
            <form method="POST" action="/PWD/views/action/actionForm.php" enctype="multipart/form-data">
                <input type="hidden" name="accion" value="tp3e2">
                <div class="mb-3">
                    <input name="input-txt" type="file">
                    <p class="mt-4 text-danger">Condiciones: Solo se permiten archivos .txt (texto plano)</p>
                </div>
                <div class="my-5">
                    <button class="btn btn-outline-success" type="submit">Enviar archivo</button>
                </div>
            </form>
        </div>
    </div>
        
        <?php

    if ($resultado !== null) {?>

        <?php 
        if ($resultado === "Error.") { ?>
            <div class="alert alert-danger  mx-5 text-center">
                <p>Error. El archivo no cumple las condiciones.</p>
            </div> <?php
        }else{ ?>
            <div class="alert alert-success mx-5">
                <textarea id="fileContent" class="form-control text-center" rows="5"><?php echo htmlspecialchars($resultado) ?></textarea>
            </div> <?php
        }?>
    <?php
    }?>

    <div class="mb-5 d-flex justify-content-center my-5">
            <a href="?page=tp3" class="btn btn-danger"> 🡨 </a>
        </div>
</main>