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
        $this->telefono = 0;
        $this->domicilio = ""; 
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

    //! ********* BUSCAR *********
    /**
     * Recupera los datos de una persona por medio del $dni ingresado como parametro.
     * Retorna true en caso de encontrar los datos, false en caso contrario.
     * @param INT $dni
     * @return BOOLEAN $resp
     */
    public function Buscar($nroDni)
    {
        $base = new BaseDatos();
        $consultaPersona = "Select * from persona where NroDni = " . $nroDni;
        $resp = false;

        //Si se conecta a la base de datos
        if ($base->Iniciar()){

            //Si se ejecuta la consulta
            if ($base->Ejecutar($consultaPersona)){
                //
                if ($row2 = $base->Registro()) {
                    $this->setNroDni($nroDni);
                    $this->setApellido($row2['Apellido']);
                    $this->setNombre($row2['nombre']);
                    $this->setFechaNac($row2['fechaNac']);
                    $this->setTelefono($row2['telefono']);
                    $this->setDomicilio($row2['Domicilio']);
                    $resp = true;
                }
            } else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
        return $resp;
    }
}




?>