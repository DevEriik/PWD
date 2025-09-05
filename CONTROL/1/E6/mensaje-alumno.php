<?php
    $nombre = $_GET['nombre_form'];
    $apellido = $_GET['apellido_form'];
    $edad = $_GET['edad_form'];
    $direccion = $_GET['direccion_form'];
    $estudios = @$_GET['opciones']; // El @ comprueba que se haya seleccionado una opcion, devuelve true si no se eligio, false si se eligio y toma el valor elegido
    $sexo = @$_GET['tipo-sexo'];
    $deportes = @$_GET['deporte'];

if($_GET['edad_form']< 18){
    echo "<h3> Hola, yo soy $nombre, $apellido, tengo $edad años y vivo en $direccion. Soy menor de edad </h3><br/>";
} else {
    echo "<h3> Hola, yo soy $nombre, $apellido, tengo $edad años y vivo en $direccion. Soy mayor de edad </h3><br/>";
}
switch($estudios){
    case 'valor1': $tipoEstudio = "No tiene estudios"; break;
    case 'valor2': $tipoEstudio = "Estudios primarios"; break;
    case 'valor3': $tipoEstudio = "Estudios secundarios"; break;
    default: $tipoEstudio = "No especificado"; break;
}
echo "<h3>Nivel de estudios: $tipoEstudio</h3>";
if ($sexo != "") {
    echo "<h3>Sexo: $sexo</h3>";
} else {
    echo "<h3>Sexo: No se seleccionó</h3>";
}
if ($deportes) {
    $cantidadDeportes = count($deportes);
    echo "<h3>Cantidad de deportes que practica: $cantidadDeportes</h3>";
} else {
    echo "<h3>No seleccionó ningún deporte</h3>";
}