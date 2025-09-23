<?php

class BaseDatos {
    
    // Atributos de conexión
    private $HOSTNAME = "localhost";
    private $DATABASE = "infoautos";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $link;
    private $error;
    private $resultado;

    public function __construct(){
        $this->HOSTNAME = "localhost";
        $this->DATABASE = "infoautos";
        $this->USERNAME = "root";
        $this->PASSWORD = "";
        $this->error = "";
    }

    // Método para conectar a la base de datos
    public function Iniciar(){
        $resp = true;
        $this->link = null;
        try{
            $this->link = new PDO("mysql:host={$this->HOSTNAME};dbname={$this->DATABASE}", $this->USERNAME, $this->PASSWORD);
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($this->link != null) {
                // Habilitamos el modo de manejo de errores
                $this->link->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
        } catch (PDOException $e){
            $this->error = "Error: " . $e->getMessage();
            $resp = false;
        }
        return $resp;
    }

    // Método para ejecutar consultas (sentencias preparadas)
    public function Ejecutar($sql, $param = null){
        $this->error = "";
        $resp = false;
        try{
            $stmt = $this->link->prepare($sql);
            if ($param != null){
                $stmt->execute($param);
            } else {
                $stmt->execute();
            }
            $this->resultado = $stmt;
            $resp = true;
        } catch(PDOException $e){
            $this->error = $e->getMessage();
        }
        return $resp;
    }
    
    // Método para obtener una fila del resultado
    public function Registro(){
        $resp = null;
        if ($this->resultado){
            $resp = $this->resultado->fetch(PDO::FETCH_ASSOC);
        }
        return $resp;
    }

    // Método para obtener todas las filas del resultado
    public function Registros(){
        $resp = null;
        if ($this->resultado){
            $resp = $this->resultado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $resp;
    }

    // Método para obtener un mensaje de error
    public function getError(){
        return $this->error;
    }

    // Método para cerrar la conexión
    public function Cerrar(){
        $this->link = null;
    }
}
?>