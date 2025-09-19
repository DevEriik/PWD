<?php

//?Obtengo datos de la URL
$resultado = $_GET['resultado'] ?? $enlace = $_GET['enlace'];
$nombreArchivo = $_GET['nombre'];
?>

<main class="container my-5 pb-5">
    <div class="d-flex justify-content-center align-items-center">
            <div>
                <h3>Formulario subida de archivos...</h3>
                <p class="text-danger">Condiciones: Solo se permiten archivos .pdf y .doc con un tamaño de 2MB como maximo</p>
                <form name="form-subir" id="form-subir" method="POST" action="/PWD/views/action/actionForm.php" enctype="multipart/form-data">
                    <input type="hidden" name="accion" value="tp3e1">
                    <div class="mb-3 input-file">
                        <input type="file" name="form-subir">
                    </div>

                    <div class="button-form my-5">
                        <button class="btn btn-outline-success" type="submit">↑ Subir Archivo ↑</button>
                    </div>
                </form>
            </div>
    </div>
    <?php

    if ($resultado !== null || $enlace !== null) {?>

        <?php if ($resultado == "") { ?>
            <div class="alert alert-danger  mx-5 my-5 text-center">
               <p>El archivo ingresado no cumple con las condiciones.</p>
            </div> <?php
        }

        if($enlace != ""){?>
            <div class="alert alert-success  mx-5 my-5 text-center">
                <h3 class="text-success my-3">Archivo subido exitosamente!</h3>
               <a href="/PWD/assets/uploads/<?php echo htmlspecialchars($nombreArchivo)?>" target="_blank"><?php echo htmlspecialchars($nombreArchivo) ?></a>
            </div><?php

        }  ?>
        
            
        <?php
    }
    
    ?>
    <div class="mb-5 d-flex justify-content-center my-5">
        <a href="?page=tp3" class="btn btn-danger"> 🡨 </a>
    </div>
</main>