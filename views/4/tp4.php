<?php
    $ejercicios = $_GET['ejercicio'] ?? null; 

    if ($ejercicios === null) {
    ?>

    <main>
        <div class="container my-5">
            <h3 class="text-center">Ejercicios Trabajo Practico Nro 4</h3>
            <div class="row gap-3 d-flex justify-content-center mt-5">
                <h3 class="text-center">EN PROCESO...</h3>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
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