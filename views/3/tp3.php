<?php
    $ejercicios = $_GET['ejercicio'] ?? null; 

    if ($ejercicios === null) {
    ?>

    <main>
        <div class="container my-5">
            <h3 class="text-center">Ejercicios Trabajo Practico Nro 3</h3>
            <div class="row gap-3 d-flex justify-content-center mt-5">

                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp3&ejercicio=E1"  class="btn btn-dark">Ejercicio 1</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp3&ejercicio=E2"  class="btn btn-dark">Ejercicio 2</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp3&ejercicio=E3" class="btn btn-dark">Ejercicio 3</a>
                </div>
                <div class="my-5 d-flex justify-content-center">
                    <a href="?page=home" class="btn btn-danger"> 🡨 </a>
                </div>
            </div>
        </div>
    </main>

    <?php
    }else{
        
        switch ($ejercicios) {

        case 'E1':
            include 'E1/index.php';
            break;

        case 'E2':
            include 'E2/index.php';
            break;

        case 'E3':
            include 'E3/index.php';
            break;
        
        default:
            echo "<p>Ejercicio no encontrado.</p>";
            break;
    }

    }
?>