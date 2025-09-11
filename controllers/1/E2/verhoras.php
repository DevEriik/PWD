<?php 

//*Inicio una variable para contar las cantidades de horas
$totalHoras = 0;
//*Creamo un arreglo vacio 
$horasPorDia = array(); 

if (isset($_GET['lunes']) && isset($_GET['martes']) && isset($_GET['miercoles']) && isset($_GET['jueves']) && isset($_GET['viernes'])) {
    
    //*Guardamos las horas de cada dia en un array
    $horasPorDia['lunes'] = $_GET['lunes'];
    $horasPorDia['martes'] = $_GET['martes'];
    $horasPorDia['miercoles'] = $_GET['miercoles'];
    $horasPorDia['jueves'] = $_GET['jueves'];
    $horasPorDia['viernes'] = $_GET['viernes'];

    //*Tenemos que recorrer el arreglo para calcular el total de horas
    foreach ($horasPorDia as $dia => $horas) {
        $totalHoras += $horas;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de horas</title>
</head>
<body>
    <div class="conteiner">
        <h1>Resumen de Horas de Cursada</h1>

        <p>
            El total de horas de cursada de la materia Programacion Web Dinamica es de: 
            <strong><?php echo $totalHoras; ?></strong> horas por semana
        </p>

        <a href="../../../views/1/E2/index.html">Volver al formulario</a>
    </div>
</body>
</html>