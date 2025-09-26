
<?php
include_once("../../controllers/4/persona.php"); 
include_once("../../controllers/4/auto.php");
   

$personaCtrl = new PersonaControl();

$autosCtrl = new AutoControl();

$personas = $personaCtrl->listarPersonas(); 
?>
<main>
    <h1>Lista de Personas</h1>

    <?php if(count($personas) > 0): ?>
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acción</th>
            </tr>
            <?php foreach($personas as $persona): ?>
            <tr>
                <td><?php echo $persona->getNroDni(); ?></td>
                <td><?php echo $persona->getNombre(); ?></td>
                <td><?php echo $persona->getApellido(); ?></td>
                <td>
                    <a href="autosPersona.php?dni=<?php echo $persona->getNroDni(); ?>">Ver Autos</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align:center; color:red;">No hay personas cargadas en la base de datos.</p>
    <?php endif; ?>
    <link rel="stylesheet" href="../CSS/4/4/estilos.css">
    <script src="../JS/4/validaciones.js"></script>
</main>