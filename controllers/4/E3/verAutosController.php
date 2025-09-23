<?php

// Incluimos los modelos que necesitamos para obtener los datos
require_once('../../../models/4/E3/Auto.php');
require_once('../../../models/4/E3/Persona.php');
require_once('../../../models/BaseDatos.php'); // Asegúrate de tener la ruta correcta

// Creamos una instancia de la clase Auto para acceder a sus métodos
$objAuto = new Auto();

// Creamos un array para almacenar los datos de los autos y sus dueños
$listaAutos = [];

// Llamamos al método que obtiene todos los autos de la base de datos
$autos = $objAuto->seleccionarTodos();

if (count($autos) > 0) {
    // Si hay autos, recorremos la lista para obtener los datos del dueño
    foreach ($autos as $auto) {
        $objPersona = new Persona();
        // Buscamos el dueño usando el DniDuenio del auto
        $objPersona->buscar($auto['DniDuenio']);
        
        // Creamos un array temporal con los datos del auto y del dueño
        $autoConDuenio = [
            'patente' => $auto['Patente'],
            'marca' => $auto['Marca'],
            'modelo' => $auto['Modelo'],
            'dueño_nombre' => $objPersona->getNombre(),
            'dueño_apellido' => $objPersona->getApellido()
        ];
        // Añadimos el array a nuestra lista de autos
        array_push($listaAutos, $autoConDuenio);
    }
}

// Ahora que tenemos todos los datos en $listaAutos, incluimos la vista
// La vista solo se encargará de mostrar estos datos
include('../../../views/4/E3/VerAutos.php');

?>