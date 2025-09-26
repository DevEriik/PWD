<?php
include_once __DIR__ . '/../../controllers/4/auto.php'; 
include_once __DIR__ . '/../../controllers/4/persona.php'; 

$personaCtrl = new PersonaControl();
$autosCtrl = new AutoControl();

$personas = $personaCtrl->listarPersonas(); // array de objetos Persona

$mensaje = ""; // Variable para construir toda la salida

if(count($personas) > 0){
    $mensaje .= "<table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acción</th>
        </tr>";

    foreach($personas as $persona){
        $mensaje .= "<tr>
            <td>".$persona['NroDni']."</td>
            <td>".$persona['Nombre']."</td>
            <td>".$persona['Apellido']."</td>
            <td>
                <a href='/PWD/views/4/autosPersona.php?dni=".$persona['NroDni']."'>Ver Autos</a>
            </td>
        </tr>";
    }

    $mensaje .= "</table>";
} else {
    $mensaje .= "<p style='text-align:center; color:red;'>No hay personas cargadas en la base de datos.</p>";
}
?>

<main>
    <h1>Lista de Personas</h1>
    <?php echo $mensaje; ?>
    <link rel="stylesheet" href="../CSS/4/4/estilos.css">
    <script src="../JS/4/validaciones.js"></script>
</main>
