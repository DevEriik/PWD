<?php 
//*Leemos los parametros para obtener el resultado.
$resultado = $_GET['resultado'] ?? null;
?>

<main class="container">
    <div class=" my-5 d-flex justify-content-center">
      <form action="/PWD/views/action/actionForm.php" method="GET" novalidate>
        <input type="hidden" name="accion" value="tp1e2">
        <label for="lunes">Lunes:</label> <br />
        <input type="number" name="lunes" value="0" min="0" /> <br /><br />

        <label for="martes">Martes:</label> <br />
        <input type="number" name="martes" value="0" min="0" /> <br /><br />

        <label for="miercoles">Miércoles:</label> <br />
        <input type="number" name="miercoles" value="0" min="0" /> <br /><br />

        <label for="jueves">Jueves:</label> <br />
        <input type="number" name="jueves" value="0" min="0" /> <br /><br />

        <label for="viernes">Viernes:</label> <br />
        <input type="number" name="viernes" value="0" min="0" /> <br /><br />

        <button class="btn btn-primary" type="submit">Calcular Total de Horas</button>
    </div>

    <?php 
    //?Si lo parametros existen mostramos el resultado. 
    if ($resultado !== null) { ?>
      <div class="alert alert-success text-center">
          La cantidad de horas cursadas es de <?php echo htmlspecialchars($resultado)?> horas.
      </div>
      <?php
    }
    ?>
    
        <div class="my-2 d-flex justify-content-center">
            <a href="?page=tp1" class="btn btn-danger"> 🡨 </a>
        </div>
  </main>

