<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/1/E7/layout.css">
    <title>Operaciones</title>
</head>
<body>
    <div class="conteiner">
        <form name="form-cal" method="GET"  action="../../../CONTROL/1/E7/calcula.php">
            <input type="text" name="valor1" id="valor1" required> <br>
            <input type="text" name="valor2" id="valor2" required> <br>
            <select name="operacion" id="operacion">
                <option value="suma">SUMA</option>
                <option value="resta">RESTA</option>
                <option value="multiplicar">MULTIPLICAR</option>
            </select>
            <input type="submit">
        </form>
    </div>
</body>
</html>