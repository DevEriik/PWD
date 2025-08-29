<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/1/E6/layout.css">
    <title>Datos Alumnos Deportistas</title>
</head>
<body>
    <div class="conteiner">
        <form name="datos-alum" method="GET"  action="../../../CONTROL/1/E6/mensaje-alumno.php">
            <label for="deportes">Indique los deportes que practica:</label> <br> <br>

            <input type="checkbox" name="deporte[]" value="futbol">
            <label for="futbol">Futbol.</label> <br>

            <input type="checkbox" name="deporte[]" value="basket">
            <label for="basket">Basket.</label> <br>

            <input type="checkbox" name="deporte[]" value="tennis">
            <label for="tennis">Tennis.</label> <br>

            <input type="checkbox" name="deporte[]" value="voley">
            <label for="voley">Voley.</label> <br>

            <input type="submit">
        </form>
    </div>
</body>
</html>