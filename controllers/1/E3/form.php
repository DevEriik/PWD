<?php
/* Con POST
if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    echo "<h3> Hola, yo soy $nombre, $apellido, tengo $edad años y vivo en $direccion. </h3><br/>";
} else {
    echo "No se recibieron datos.";
}
*/

/* Con GET */
if($_GET){
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    echo "<h3> Hola, yo soy $nombre, $apellido, tengo $edad años y vivo en $direccion. </h3><br/>";
} else {
    echo "No se recibieron datos.";
}