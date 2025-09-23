<main>
    <?php
    // Verificamos si la variable $listaAutos existe y si tiene datos
    if (isset($listaAutos) && count($listaAutos) > 0) {
        echo "<h1>Listado de Autos</h1>";
        echo "<table border='1'>";
        echo "<thead><tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr></thead>";
        echo "<tbody>";

        // Recorremos la lista de autos que nos pasó el controlador
        foreach ($listaAutos as $auto) {
            echo "<tr>";
            echo "<td>" . $auto['patente'] . "</td>";
            echo "<td>" . $auto['marca'] . "</td>";
            echo "<td>" . $auto['modelo'] . "</td>";
            echo "<td>" . $auto['dueño_nombre'] . " " . $auto['dueño_apellido'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        // Mensaje si no hay autos cargados
        echo "<h1>No hay autos cargados.</h1>";
    }
    ?>
</main>