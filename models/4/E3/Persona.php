<?php


require_once __DIR__ . '/../../../models/BaseDatos.php';

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
                    $this->setNombre($row2['Nombre']);
                    $this->setFechaNac($row2['fechaNac']);
                    $this->setTelefono($row2['Telefono']);
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

     //! ******** INSERTAR ******** 
    /**
	 * Inserta una nueva persona a la coleccion de personas.
	 * Retorna true si pudo insertarlo y false en caso contrario.
	 * @return BOOLEAN $resp 
	 */		
    public function insertar()
    {
        //Inicializo variables
        $base = new BaseDatos();
        $resp = false;
        $consultaInsertar = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
				VALUES ('" . $this->getNroDni() . "','" . $this->getApellido() . "','" . $this->getNombre() . "','" . $this->getFechaNac() . "','" . $this->getTelefono() . "','" . $this->getDomicilio() . "')";
        //Si se conecta a la base de datos
        if ($base->Iniciar()) {

            if ($id = $base->devuelveIDInsercion($consultaInsertar)) {
                $this->setIdPersona($id);
                $resp = true;
            } else {
                $this->setmensajeOperacion($base->getError());
            }
        } else { //Si no se conecta a la base de datos
            $this->setmensajeOperacion($base->getError());
        }
        return $resp;
    }

     //! ******** MODIFICAR ******** 
    /**
	 * Modifica una persona de la coleccion de personas.
	 * Retorna true si pudo modificarla y false en caso contrario.
	 * @return BOOLEAN $resp 
	 */		
    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $consultaModifica = "UPDATE persona SET NroDni='" . $this->getNroDni() . "', Apellido='" . $this->getApellido() . "', Nombre='" . $this->getNombre() . "',fechaNac='" . $this->getFechaNac() . "' ,Telefono='" . $this->getTelefono() . "',Domicilio='" . $this->getDomicilio() . "' WHERE NroDni = " . $this->getNroDni();
        // echo $consultaModifica . "\n";
        if ($base->Iniciar()) {

            //Verifico si existe la persona que deseo modificar
            if($this->Buscar($this->getIdPersona())){

                if ($base->Ejecutar($consultaModifica)) {
                    $resp = true;
                } else { //Si no se ejecuta la consulta 
                    $this->setmensajeOperacion($base->getError());
                }
            }else{ //Si la persona buscada no existe
                $this->setMensajeOperacion($base->getError());
            }
        } else { //Si no se conecta a la base de datos
            $this->setmensajeOperacion($base->getError());
        }
        return $resp;
    }

    //! ******** ELIMINAR ******** 
    /**
	 * Elimina una persona a la coleccion de personas.
	 * Retorna true si pudo eliminarlo y false en caso contrario.
	 * @return BOOLEAN $resp 
	 */		
    public function eliminar()
    {
        $base = new BaseDatos();
        $resp = false;

        //Si se conecta a la base de datos
        if ($base->Iniciar()){
            $consultaBorra = "DELETE FROM persona WHERE NroDni=" . $this->getNroDni();

            //Si se ejecuta la consulta
            if ($base->Ejecutar($consultaBorra)){
                $resp = true;
            } else { //Si no se ejecuta la consulta 
                $this->setmensajeOperacion($base->getError());
            }
        } else { //Si no se conecta a la base de datos
            $this->setmensajeOperacion($base->getError());
        }
        return $resp;
    }
}




?>