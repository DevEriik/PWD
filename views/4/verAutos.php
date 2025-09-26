<?php
include_once __DIR__ . '/../../controllers/4/auto.php';
include_once __DIR__ . '/../../controllers/4/persona.php'; 
$autoCtrl = new AutoControl();
$personaCtrl = new PersonaControl();

$autos = $autoCtrl->listarAutos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Autos</title>
    <link rel="stylesheet" href="../CSS/4/4/estilos.css">
    <script src="../JS/4/validaciones.js"></script>
</head>
<body>
    <h1>Listado de Autos</h1>

    <?php if (count($autos) > 0): ?>
        <table>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Dueño</th>
            </tr>
            <?php foreach ($autos as $auto): 
                $dueño = $personaCtrl->buscarPersona($auto->getDniDuenio());
                $nombreDueño = $dueño ? $dueño->getNombre() . " " . $dueño->getApellido() : "Desconocido";
            ?>
            <tr>
                <td><?php echo $auto->getPatente(); ?></td>
                <td><?php echo $auto->getMarca(); ?></td>
                <td><?php echo $auto->getModelo(); ?></td>
                <td><?php echo $nombreDueño; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align:center; color:red;">No hay autos cargados en la base de datos.</p>
    <?php endif; ?>
</body>
</html>