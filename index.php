<?php
//* Logica para decidir que vista cargar. 
$page = $_GET['page'] ?? 'home'; 

switch ($page) {
    case 'tp1':
        $view = 'views/1/tp1.php';
        break;

    case 'tp2':
        $view = 'views/2/tp2.php';
        break;
    
    case 'tp3':
        $view = 'views/3/tp3.php';
        break;

    case 'tp4':
        $view = 'views/4/tp4.php';
        break;
    
    default:
        $view = 'views/home.php';
        break;
}
?>
<!-- Linkeo Font Awesome para iconos de algunos ejercicios  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<body>
    <?php include 'views/structure/navbar.php' ?>

    <div class="content">
        <?php include $view ?>
    </div>

    <?php include 'views/structure/footer.php' ?>

</body>