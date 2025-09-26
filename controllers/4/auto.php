<?php
include_once __DIR__. "/../../models/4/auto.php";

class AutoControl {

    public function listarAutos() {
        $a = new Auto("","","","");
        $lis = $a->listarAuto();
        return $lis;
    }

    public function buscarAuto($patente) {
        $autos = Auto::seleccionar($patente);
        return count($autos) > 0 ? $autos[0] : null;
    }

    public function agregarAuto($patente, $marca, $modelo, $dniDuenio) {
        $a = new Auto($patente, $marca, $modelo, $dniDuenio);
        $a->insertar();
    }

    public function modificarAuto($patente, $marca, $modelo, $dniDuenio) {
        $a = new Auto($patente, $marca, $modelo, $dniDuenio);
        $a->modificar();
    }

    public function eliminarAuto($patente) {
        $a = new Auto();
        $a->setPatente($patente);
        $a->eliminar();
    }
}