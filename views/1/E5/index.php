<?php
//*Obtenemos valores por URL

$estudio = $_GET['nivel-estudio'] ?? null; 
$sexo = $_GET['sexo'] ?? null;

?>

<main>
    <div class="container my-5 d-flex justify-content-center">
        <form name="datos_form" method="GET" action="/PWD/views/action/actionForm.php">
            <div class="row">
                <input type="hidden" name="accion" value="tp1e5">

                <!-- COLUMNA NOMBRE -->
                <div class="col-md-12">
                    <label for="nombre">Nombre:</label>
                    <input class="d-flex" type="text" name="nombre_form" id="nombre_form">
                </div>

                <!-- COLUMNA APELLIDO -->
                <div class="col-md-12">
                    <label for="apellido">Apellido:</label>
                    <input class="d-flex" type="text" name="apellido_form" id="apellido_form">
                </div>

                <!-- COLUMNA EDAD -->
                <div class="col-md-12">
                    <label for="edad">Edad:</label>
                    <input class="d-flex" type="number" name="edad_form" id="edad_form">
                </div>
                
                <!-- COLUMNA DIRECCION -->
                <div class="col-md-12">
                    <label for="direccion">Direccion:</label>
                    <input class="d-flex" type="text" name="direccion_form" id="direccion_form">
                </div>

                <!-- COLUMNA NIVEL ESTUDIO -->
                <div class="col-md-12">
                    <label for="nivel-estudio">Nivel de Estudio</label>
                    <br>
                    <input type="radio" id="opcion1" name="nivel-estudio" value="No tiene estudio" required>
                    <label for="no-estudio">No tiene estudio.</label>
                    <br>
                    <input type="radio" id="opcion2" name="nivel-estudio" value="Estudios Primarios" required>
                    <label for="estudio-primario">Estudios Primarios.</label>
                    <br>
                    <input type="radio" id="opcion3" name="nivel-estudio" value="Estudios Secundarios" required>
                    <label for="estudio-secundario">Estudios Secundarios.</label>
                </div>

                <!-- COLUMNA SEXO -->
                <div class="col-md-12 my-3">
                    <label for="sexo">Sexo</label>
                    <input class="d-flex" list="sexos" id="tipo-sexo" name="sexo" required>
                    <datalist id="sexos">
                        <option value="Masculino"></option>
                        <option value="Femenino"></option>
                        <option value="Otro"></option>
                    </datalist>
                    <input class="btn btn-primary mt-3" type="submit" name="Submit" value="Aceptar" />
                </div>
            </div>
        </form>
    </div>

    <?php

    if ($estudio !== null && $sexo !== null) { ?>
        <div class="my-2 alert alert-success text-center">
            El tipo de estudio de la persona ingresada es: <?php echo htmlspecialchars($estudio) ?> <br> Su genero es: <?php echo htmlspecialchars($sexo) ?>
        </div><?php
    }
    
    ?>
    <div class="my-2 d-flex justify-content-center">
        <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
    </div>
</main>