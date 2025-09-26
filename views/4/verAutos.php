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

    <?php 
    if(count($autos) > 0){
        echo "<table>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Dueño</th>
            </tr>";
        
        foreach ($autos as $a){
            $duenio = $personaCtrl->buscarPersona($a["DniDuenio"]); // devuelve objeto Persona o null
            $nombreDuenio = $duenio ? $duenio->getApellido() . " " . $duenio->getNombre() : "Desconocido";
            
            echo "<tr>
                <td>".$a["Patente"]."</td>
                <td>".$a["Marca"]."</td>
                <td>".$a["Modelo"]."</td>
                <td>".$nombreDuenio."</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center; color:red;'>No hay autos cargados en la base de datos.</p>";
    }
    ?>
</body>
</html>
