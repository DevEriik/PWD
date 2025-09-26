<?php
class baseDatos {
    private $host = "localhost";
    private $user = "root";   
    private $pass = "";
    private $db = "infoautos";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($this->conn->connect_error) {
                // Si hay un error, lanza una excepción
                throw new Exception("Error de conexión: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            // Captura la excepción y muestra el error de forma segura
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    public function ejecutarConsulta($sql) {
        return $this->conn->query($sql);
    }

    public function ejecutar($sql) {
        return $this->conn->query($sql);
    }

    public function cerrar() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
