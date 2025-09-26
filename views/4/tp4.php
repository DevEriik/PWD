<?php
    $ejercicios = $_GET['ejercicio'] ?? null; 

    if ($ejercicios === null) {
    ?>

    <main>
        <div class="container my-5">
            <div class="container my-5">
            <h3 class="text-center">Ejercicios Trabajo Practico Nro 4</h3>
            <div class="row gap-3 d-flex justify-content-center mt-5">

                <div class="col-md-8 d-flex justify-content-center btn-fixed-width">
                    <a href="?page=tp4&ejercicio=E3"  class="btn btn-dark">Ver Auto</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E4"  class="btn btn-dark">Buscar Auto</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E5" class="btn btn-dark">Lista Persona</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E6" class="btn btn-dark">Nueva Persona</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E7" class="btn btn-dark">Nuevo Auto</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E8" class="btn btn-dark">Cambio Dueño</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp4&ejercicio=E9" class="btn btn-dark">Buscar Persona</a>
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
            include 'views/4/verAutos.php';
            break;

        case 'E4':
            include 'views/4/buscarAuto.php';
            break;

        case 'E5':
            include 'views/4/listaPersonas.php';
            break;

        case 'E6':
            include 'views/4/nuevaPersona.php';
            break;

        case 'E7':
            include 'views/4/nuevoAuto.php';
            break;

        case 'E8':
            include 'views/4/cambioDuenio.php';
            break;

        case 'E9':
            include 'views/4/buscarPersona.html';
            break;
        
        default:
            echo "<p>Ejercicio no encontrado.</p>";
            break;
    }

    }
?>