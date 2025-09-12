
<?php
    $ejercicios = $_GET['ejercicio'] ?? null; 

    if ($ejercicios === null) {
    ?>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">

    <main>
        <div class="container mt-5 mb-5">
            <h3 class="text-center">Ejercicios Trabajo Practico Nro 1</h3>
            <div class="row gap-3 d-flex justify-content-center">

                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E1"  class="btn btn-dark">Ejercicio 1</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E2"  class="btn btn-dark">Ejercicio 2</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E3" class="btn btn-dark">Ejercicio 3</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E4" class="btn btn-dark">Ejercicio 4</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E5" class="btn btn-dark">Ejercicio 5</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E6" class="btn btn-dark">Ejercicio 6</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E7" class="btn btn-dark">Ejercicio 7</a>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                    <a href="?page=tp1&ejercicio=E8" class="btn btn-dark">Ejercicio 8</a>
                </div>
                <div class="my-2">
                    <a href="?page=home" class="btn btn-danger"> < Volver </a>
                </div>
            </div>
        </div>
    </main>
    <?php
    }else{
        
        switch ($ejercicios) {
        case 'E1':
            include 'E1/index.html';
            break;

        case 'E2':
            include 'E2/index.html';
            break;

        case 'E3':
            include 'E3/index.php';
            break;

        case 'E3':
            include 'E3/index.php';
            break;

        case 'E4':
            include 'E4/index.php';
            break;

        case 'E5':
            include 'E5/index.php';
            break;

        case 'E6':
            include 'E6/index.php';
            break;

        case 'E7':
            include 'E7/index.php';
            break;

        case 'E8':
            include 'E8/index.php';
            break;
        
        default:
            echo "<p>Ejercicio no encontrado.</p>";
            break;
    }

    }
?>


