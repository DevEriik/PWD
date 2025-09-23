<?php
    $ejercicios = $_GET['ejercicio'] ?? null; 

    if ($ejercicios === null) {
    ?>

    <main>
        <div class="container my-5">
            <div class="container my-5">
            <h3 class="text-center">Ejercicios Trabajo Practico Nro 4</h3>
            <div class="row gap-3 d-flex justify-content-center mt-5">

                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E3"  class="btn btn-dark">Ejercicio 3</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="#"  class="btn btn-dark">#</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="#" class="btn btn-dark">#</a>
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

        case 'E3':
            include 'E3/VerAutos.php';
            break;

        case '#':
            include '#';
            break;

        case '#':
            include '#';
            break;
        
        default:
            echo "<p>Ejercicio no encontrado.</p>";
            break;
    }

    }
?>