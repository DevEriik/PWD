<?php
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
if($_GET['edad']< 18){
    echo "<h3> Hola, yo soy $nombre, $apellido, tengo $edad años y vivo en $direccion. Soy menor de edad </h3><br/>";
} else {
    echo "<h3> Hola, yo soy $nombre, $apellido, tengo $edad años y vivo en $direccion. Soy mayor de edad </h3><br/>";
}