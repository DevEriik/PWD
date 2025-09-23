<?php


require_once __DIR__ . '/../../../models/BaseDatos.php';

class Auto {
    
    //! ******** ATRIBUTOS ******** 
    private $patente;
    private $marca;
    private $modelo;
    private $DniDuenio;

    //! ******** CONSTRUCTOR ******** 
    public function __construct(){
        $this->patente = "";
        $this->marca = "";
        $this->modelo = 0;
        $this->DniDuenio = "";
    }
    
    // Método para cargar los datos en el objeto desde una consulta
    public function cargar($patente, $marca, $modelo, $DniDuenio){
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->DniDuenio = $DniDuenio;
    }

    //! ********** SETTERS *************

    public function setPatente($patente){
        $this->patente = $patente;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setDniDuenio($DniDuenio){
        $this->DniDuenio = $DniDuenio;
    }

    //! ********** GETTERS *************

    public function getPatente(){
        return $this->patente;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getDniDuenio(){
        return $this->DniDuenio;
    }
    
    // Métodos CRUD

    // Método para buscar un auto por su patente
    public function buscar($patente){
        $base = new BaseDatos();
        $resp = false;
        $consulta = "SELECT * FROM auto WHERE Patente = :patente";
        $param = [":patente" => $patente];
        if ($base->iniciar()) {
            if ($base->ejecutar($consulta, $param)) {
                if ($fila = $base->registro()) {
                    $this->cargar($fila['Patente'], $fila['Marca'], $fila['Modelo'], $fila['DniDuenio']);
                    $resp = true;
                }
            }
        }
        return $resp;
    }

    // Método para insertar un nuevo auto
    public function insertar(){
        $base = new BaseDatos();
        $resp = false;
        $consulta = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) 
                     VALUES (:patente, :marca, :modelo, :dniDuenio)";
        $param = [
            ":patente" => $this->getPatente(), 
            ":marca" => $this->getMarca(),
            ":modelo" => $this->getModelo(),
            ":dniDuenio" => $this->getDniDuenio()
        ];
        if ($base->iniciar()) {
            if ($base->ejecutar($consulta, $param)) {
                $resp = true;
            }
        }
        return $resp;
    }
    
    // Método para modificar los datos de un auto existente
    public function modificar(){
        $base = new BaseDatos();
        $resp = false;
        $consulta = "UPDATE auto SET Marca = :marca, Modelo = :modelo, DniDuenio = :dniDuenio WHERE Patente = :patente";
        $param = [
            ":marca" => $this->getMarca(),
            ":modelo" => $this->getModelo(),
            ":dniDuenio" => $this->getDniDuenio(),
            ":patente" => $this->getPatente()
        ];
        if ($base->iniciar()) {
            if ($base->ejecutar($consulta, $param)) {
                $resp = true;
            }
        }
        return $resp;
    }

    // Método para eliminar un auto por su patente
    public function eliminar(){
        $base = new BaseDatos();
        $resp = false;
        $consulta = "DELETE FROM auto WHERE Patente = :patente";
        $param = [":patente" => $this->getPatente()];
        if ($base->iniciar()) {
            if ($base->ejecutar($consulta, $param)) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Devuelve una coleccion de todos los autos cargados en la base de datos.
     *
     * @return array|null
     */
    public function seleccionarTodos(){
        $base = new BaseDatos();
        $arregloAutos = [];
        $consulta = "SELECT * FROM auto";
        
        if ($base->Iniciar()) {
            if ($base->Ejecutar($consulta)) {
                $arregloAutos = $base->Registros();
            }
        }
        return $arregloAutos;
    }
}
?>