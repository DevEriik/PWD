<main>
    <script src="../JS/4/validaciones.js"></script>
    <h1>Listado de Autos</h1>

    <?php if (isset($listaAutos) && count($listaAutos) > 0): ?>
        <table>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Dueño</th>
            </tr>
            <?php foreach ($listaAutos as $auto): ?>
            <tr>
                <td><?php echo $auto['patente']; ?></td>
                <td><?php echo $auto['marca']; ?></td>
                <td><?php echo $auto['modelo']; ?></td>
                <td><?php echo $auto['dueño']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align:center; color:red;">No hay autos cargados en la base de datos.</p>
    <?php endif; ?>
</main>