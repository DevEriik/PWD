<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/1/E5/layout.css">
    <title>Datos</title>
</head>
<body>
    <div class="conteiner">
        <form name="datos_form" method="GET" action="../../../CONTROL/1/E5/mensaje-ejercicio5.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre_form" id="nombre_form"> <br> <br>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido_form" id="apellido_form"> <br> <br>

            <label for="edad">Edad:</label>
            <input type="number" name="edad_form" id="edad_form"> <br> <br>

            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion_form" id="direccion_form"> <br> <br>

            <label for="nivel-estudio">Nivel de Estudio</label> <br> <br>

            <input type="radio" id="opcion1" name="opciones" value="valor1" required> 
            <label for="no-estudio">No tiene estudio.</label>
            <br><br>

            <input type="radio" id="opcion2" name="opciones" value="valor2" required>
            <label for="estudio-primario">Estudios Primarios.</label>
            <br><br>

            <input type="radio" id="opcion3" name="opciones" value="valor3" required>
            <label for="estudio-secundario">Estudios Secundarios.</label>
            <br><br>

            <label for="sexo">Sexo</label>
            <input list="sexos" id="tipo-sexo" name="tipo-sexo" required>
            <datalist id="sexos">
                <option value="masculino"></option>
                <option value="femenino"></option>
                <option value="otro"></option>
            </datalist>
            <br><br>

            <input type="submit" name="enviar_form" id="enviar_form">

        </form>
    </div>
</body>
</html>