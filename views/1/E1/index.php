<?php
// Lee los parámetros de la URL si existen
$numero_ingresado = $_GET['numero'] ?? null;
$resultado = $_GET['resultado'] ?? null;
?>

<main>
    <div class="container my-5">
        <h1 class="text-center">Verificar si un número es positivo, negativo o cero</h1>
        <div class="d-flex justify-content-center my-5">
            <form action="/PWD/views/action/actionForm.php" method="POST" id="numberForm">
                <input type="hidden" name="accion" value="tp1e1" />
                <label for="numero">Introduce un numero:</label>
                <input type="number" name="numero" id="numero" required />
                <div class="error-message my-2" id="numError">
                    Por favor, introduce un número válido.
                </div>
                <button class="btn btn-primary my-3" type="submit">Enviar</button>
            </form>
        </div>
        
        <?php 
        // Muestra el resultado solo si los parámetros existen
        if ($resultado !== null) { 
            if ($resultado === "error") { ?>
                <div class="alert alert-danger text-center">
                    Error: El valor enviado no es un número válido.
                </div>
            <?php } else { ?>
                <div class="alert alert-success text-center">
                    El número <?php echo htmlspecialchars($numero_ingresado); ?> es <?php echo htmlspecialchars($resultado); ?>.
                </div>
            <?php }
        }
        ?>
        
        <div class="my-2 d-flex justify-content-center">
            <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
        </div>
        <br>
    </div>
</main>
