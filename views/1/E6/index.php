<?php
//?Obtengo los datos por URL
$resultado = $_GET['resultado'] ?? null;

?>

<main class="container my-5">
    <div class="d-flex justify-content-center">
        <form name="datos-alum" method="GET"  action="/PWD/views/action/actionForm.php">
            <div class="">
                <input type="hidden" name="accion" value="tp1e6">

                <!-- COLUMNA NOMBRE -->
                <div class="">
                    <label for="nombre">Nombre:</label>
                    <input class="d-flex" type="text" name="nombre_form" id="nombre_form">
                </div>

                <!-- COLUMNA APELLIDO -->
                <div class="">
                    <label for="apellido">Apellido:</label>
                    <input class="d-flex" type="text" name="apellido_form" id="apellido_form">
                </div>

                <!-- COLUMNA EDAD -->
                <div class="">
                    <label for="edad">Edad:</label>
                    <input class="d-flex" type="number" name="edad_form" id="edad_form">
                </div>
                
                <!-- COLUMNA DIRECCION -->
                <div class="">
                    <label for="direccion">Direccion:</label>
                    <input class="d-flex" type="text" name="direccion_form" id="direccion_form">
                </div>

                <!-- COLUMNA NIVEL ESTUDIO -->
                <div class="">
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
                <div class="my-3">
                    <label for="sexo">Sexo</label>
                    <input class="d-flex" list="sexos" id="tipo-sexo" name="sexo" required>
                    <datalist id="sexos">
                        <option value="Masculino"></option>
                        <option value="Femenino"></option>
                        <option value="Otro"></option>
                    </datalist>
                </div>
            
            
                <label for="deportes">Indique los deportes que practica:</label> <br> <br>

                <input type="checkbox" name="deporte[]" value="futbol">
                <label for="futbol">Futbol.</label> <br>

                <input type="checkbox" name="deporte[]" value="basket">
                <label for="basket">Basket.</label> <br>

                <input type="checkbox" name="deporte[]" value="tennis">
                <label for="tennis">Tennis.</label> <br>

                <input type="checkbox" name="deporte[]" value="voley">
                <label for="voley">Voley.</label> <br>

                <input class="btn btn-primary mt-3" type="submit" name="Submit" value="Aceptar" />
            </div>
        </form>
    </div>

    <?php
    
        if ($resultado !== null) { ?>
           <div class="my-2 alert alert-success text-center">
                La cantidad de deportes que practica es de <?php echo htmlspecialchars($resultado) ?> deporte/s.
           </div><?php
        }
    
    ?>
    <div class="my-2 d-flex justify-content-center">
        <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
    </div>
</main>