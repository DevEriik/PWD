<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/1/E8/layout.css">
    <title>Cine Cinem@s</title>
</head>
<body>
    <div class="conteiner">
        <form name="cine-form" id="cine-form" method="GET" action="../../../CONTROL/1/E8/CalculoEntrada.php">
            <h1>Cine Cinem@s</h1> <br>

            <label for="edad">Ingrese su edad.</label> <br>
            <input name="edad-est" id="edad-est" type="number" required> <br> <br>
            
            <label for="estudiante">Marque si es estudiante o no</label> <br>
            <input type="radio" name="estudiantes" value="valor1" required> Si<br>
            <input type="radio" name="estudiantes" value="valor2" required> No <br> <br>

            <input type="submit">
            <input type="reset">
        </form>
    </div>
</body>
</html>