<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Auto</title>
    <link rel="stylesheet" href="../CSS/4/4/estilos.css">
    <script src="../JS/4/validaciones.js"></script>
    <script>
        function validarFormulario() {
            var patente = document.getElementById("patente").value;
            if (patente.trim() === "") {
                alert("Por favor, ingrese la patente del auto.");
                return false; 
            }
            return true;
        }
    </script>
</head>
    
<body>
    <h1>Buscar Auto por Patente</h1>
<form action="/PWD/views/action/actionForm.php" method="POST" onsubmit="return validarBuscarAuto();">
    <input type="hidden" name="accion" value="buscarAuto">
    <label for="patente">Patente:</label>
    <input type="text" id="patente" name="patente" maxlength="10">
    <input type="submit" value="Buscar">
</form>
</body>
</html>