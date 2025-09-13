<?php 
//?Obtenemos los datos de la URL
$nombre = $_GET['nombre'] ?? null;
$apellido = $_GET['apellido'] ?? null;
$edad = $_GET['edad'] ?? null;
$direccion = $_GET['direccion'] ?? null;
?>

<main class="container my-5">
    <div class="d-flex justify-content-center">
    <!-- Con POST
<html>
    <head>
    <title> Ejercicio 3 </title>
    </head>
    <body>
         <form id="form1" name="form1" method="post" action="../../../controllers/1/E3/form.php">
            Nombre: <input name="nombre" type="text" id="nombre" /> <br />
            Apellido: <input name="apellido" type="text" id="apellido" /> <br />
            Edad: <input name="edad" type="text" id="edad" /> <br />
            Direccion: <input name="direccion" type="text" id="direccion" /> <br />
 <input type="submit" name="Submit" value="Aceptar" />
</form>
-->

<!-- Con GET --> 
            <form id="form1" name="form1" method="GET" action="/PWD/views/action/actionForm.php">
                <input type="hidden" name="accion" value="tp1e3">
                Nombre: <input class="d-flex gap-2" name="nombre" type="text" id="nombre" /> <br />
                Apellido: <input class="d-flex gap-2" name="apellido" type="text" id="apellido" /> <br />
                Edad: <input class="d-flex gap-2" name="edad" type="text" id="edad" /> <br />
                Direccion: <input class="d-flex gap-2" name="direccion" type="text" id="direccion" /> <br />
                <input class="btn btn-primary" type="submit" name="Submit" value="Aceptar" />
            </form>
    </div>
    <?php 

    if ($nombre !== null && $apellido !== null && $edad !== null && $direccion !== null) { ?>
        <div class="my-2 alert alert-success text-center">
            Hola, yo soy <?php echo htmlspecialchars($nombre) ?> 
            <?php echo htmlspecialchars( $apellido) ?> 
            tengo <?php echo htmlspecialchars($edad) ?> años 
            y vivo en <?php echo htmlspecialchars($direccion) ?>. 
        </div>
        <?php
    }

    ?>
    <div class="my-2 d-flex justify-content-center ">
        <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
    </div>
</main>