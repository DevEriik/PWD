<?php

require_once('auto.php');
require_once('persona.php');


$autoCtrl = new AutoControl();
$personaCtrl = new PersonaControl();


// El script se detiene en una de estas líneas
$autos = $autoCtrl->listarAutos();


// El script se detiene en una de estas líneas
$listaAutos = [];
if (count($autos) > 0) {

    foreach ($autos as $auto) {
        $dueño = $personaCtrl->buscarPersona($auto->getDniDuenio());

        $nombreDueño = $dueño ? $dueño->getNombre() . " " . $dueño->getApellido() : "Desconocido";
        $listaAutos[] = [
            'patente' => $auto->getPatente(),
            'marca' => $auto->getMarca(),
            'modelo' => $auto->getModelo(),
            'dueño' => $nombreDueño
        ];
    }
}


include_once('../../views/4/verAutos.php');

?>