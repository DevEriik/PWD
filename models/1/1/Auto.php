<?php

class Persona{
    
    //! ******** ATRIBUTOS ******** 
    private $nroDni;
    private $apellido;
    private $nombre; 
    private $fechaNac;
    private $telefono;
    private $domicilio; 

    //! ******** CONSTRUCTOR ******** 
    public function __construct(){
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = ""; 
        $this->telefono = "";
        $this->domicilio = "";
    }

    // Método para cargar los datos en el objeto desde una consulta
    public function cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    //! ********** SETTERS *************

    public function setNroDni($nroDni){
        $this->nroDni = $nroDni;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setFechaNac($fechaNac){
        $this->fechaNac = $fechaNac;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setDomicilio($domicilio){
        $this->domicilio = $domicilio;
    }

    //! ********** GETTERS *************

    public function getNroDni(){
        return $this->nroDni;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    //! ********** METODOS CRUD *************

    public function Buscar($nroDni){
        $base = new BaseDatos();
        $resp = false;
        $consultaPersona = "SELECT * FROM persona WHERE NroDni = :nroDni";
        $parametros = [":nroDni" => $nroDni];
        
        if ($base->Iniciar()){
            if ($base->Ejecutar($consultaPersona, $parametros)){
                if ($row = $base->Registro()) {
                    $this->cargar($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $resp = true;
                }
            }
        }
        return $resp;
    }
     
    public function insertar(){
        $base = new BaseDatos();
        $resp = false;
        $consultaInsertar = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) 
                             VALUES (:nroDni, :apellido, :nombre, :fechaNac, :telefono, :domicilio)";
        $parametros = [
            ":nroDni" => $this->getNroDni(),
            ":apellido" => $this->getApellido(),
            ":nombre" => $this->getNombre(),
            ":fechaNac" => $this->getFechaNac(),
            ":telefono" => $this->getTelefono(),
            ":domicilio" => $this->getDomicilio()
        ];
        
        if ($base->Iniciar()) {
            if ($base->Ejecutar($consultaInsertar, $parametros)) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $consultaModifica = "UPDATE persona SET Apellido = :apellido, Nombre = :nombre, fechaNac = :fechaNac, 
                             Telefono = :telefono, Domicilio = :domicilio WHERE NroDni = :nroDni";
        $parametros = [
            ":apellido" => $this->getApellido(),
            ":nombre" => $this->getNombre(),
            ":fechaNac" => $this->getFechaNac(),
            ":telefono" => $this->getTelefono(),
            ":domicilio" => $this->getDomicilio(),
            ":nroDni" => $this->getNroDni()
        ];
        
        if ($base->Iniciar()) {
            if ($base->Ejecutar($consultaModifica, $parametros)) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function eliminar(){
        $base = new BaseDatos();
        $resp = false;
        $consultaBorra = "DELETE FROM persona WHERE NroDni = :nroDni";
        $parametros = [":nroDni" => $this->getNroDni()];

        if ($base->Iniciar()){
            if ($base->Ejecutar($consultaBorra, $parametros)){
                $resp = true;
            }
        }
        return $resp;
    }
}

?>