<?php
include_once __DIR__ . '/../../controllers/4/auto.php'; 
include_once __DIR__ . '/../../controllers/4/persona.php'; 

$personaCtrl = new PersonaControl();
$autoCtrl = new AutoControl();

$dni = isset($_GET['dni']) ? trim($_GET['dni']) : "";

if($dni === "") {
    echo "<p style='color:red; text-align:center;'>No se recibió ningún DNI.</p>";
    exit;
}
$persona = $personaCtrl->buscarPersona($dni);
$autos = $autoCtrl->listarAutos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autos de Persona</title>
    <link rel="stylesheet" href="../CSS/4/4/estilos.css">
</head>
<body>

<?php if($persona): ?>
    <h1>Datos de <?php echo $persona->getNombre() . " " . $persona->getApellido(); ?></h1>
    <p><strong>DNI:</strong> <?php echo $persona->getNroDni(); ?></p>
    <p><strong>Teléfono:</strong> <?php echo $persona->getTelefono(); ?></p>
    <p><strong>Domicilio:</strong> <?php echo $persona->getDomicilio(); ?></p>

    <h2>Autos asociados</h2>


    <?php 
        $mensaje = "";
        if(count($autos) > 0){
            $mensaje = "<table>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                    </tr>";
            foreach($autos as $aut){
                if($aut["DniDuenio"] = $persona->getNroDni()){
                    $mensaje .= "<tr>
                            <td>".$aut["Patente"]."</td>
                            <td>".$aut["Marca"]."</td>
                            <td>".$aut["Modelo"]."</td>
                        </tr>";
                }
            }
        }else{
            $mensaje = " <p style='color:red;'>Esta persona no tiene autos registrados.</p>";
        }
        echo $mensaje;
    ?>
<?php else: ?>
    <p style="color:red;">No se encontró ninguna persona con el DNI ingresado.</p>
<?php endif; ?>

</body>
</html>