<?php
//?Obtenemos datos mediante la URL
$estudio = $_GET['estudiantes'] ?? null;
$edad = $_GET['edad-est'] ?? null;
$resultado = $_GET['resultado'] ?? null;
?>

<main class="container">
    <div class="my-5 d-flex justify-content-center">
        <form name="cine-form" id="cine-form" method="GET" action="/PWD/views/action/actionForm.php">
            <input type="hidden" name="accion" value="tp1e8">
            <h1>Cine Cinem@s</h1> <br>

            <label for="edad">Ingrese su edad.</label> <br>
            <input name="edad-est" id="edad-est" type="number" required min="0" value="<?php echo htmlspecialchars($edad)  ?>"> <br> <br>
            
            <label for="estudiante">Marque si es estudiante o no</label> <br>
            <input type="radio" name="estudiantes" value="valor1" <?php if ($estudio === 'valor1') echo 'checked'; ?> required> Si<br>
            <input type="radio" name="estudiantes" value="valor2" <?php if ($estudio === 'valor2') echo 'checked'; ?> required> No <br> <br>

            <input type="submit" class="btn btn-primary">
            <a href="/PWD/index.php?page=tp1&ejercicio=E8" class="btn btn-warning">Restablecer</a>
        </form>
    </div>


        <?php
            if ($resultado !== null) { ?>
                <div class="alert alert-success text-center">
                    <?php echo htmlspecialchars($resultado) ?>
                </div><?php 
            } ?>

            <div class="my-2 d-flex justify-content-center">
                <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
            </div>
</main>