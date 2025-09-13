<?php
//?Obtenemos la edad por el URL
$edad = $_GET['edad'] ?? null;
$resultado = $_GET['resultado'] ?? null;
?>

<main class="container">
    <div class="d-flex justify-content-center my-5">
        <form id="form1" name="form1" method="GET" action="/PWD/views/action/actionForm.php">
            <input type="hidden" name="accion" value="tp1e4">
                Nombre: <input class="d-flex" name="nombre" type="text" id="nombre" /> <br />
                Apellido: <input class="d-flex" name="apellido" type="text" id="apellido" /> <br />
                Edad: <input class="d-flex" name="edad" type="text" id="edad" /> <br />
                Direccion: <input class="d-flex" name="direccion" type="text" id="direccion" /> <br />
                <input class="btn btn-primary" type="submit" name="Submit" value="Aceptar" />
        </form>
    </div>

    <?php 
        if ($edad !== null && $resultado !== 'Error.') { ?>
            <div class="my-2 alert alert-success text-center">
                La persona ingresada <?php echo htmlspecialchars($resultado) ?> 
            </div><?php
        } elseif ($resultado === 'Error.') { ?>
            <div class="my-2 alert alert-success text-center">
                La edad ingresada es negativa o incorrecta...
            </div><?php
        }
    
    ?>
    <div class="my-2 d-flex justify-content-center">
        <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
    </div>
</main>
