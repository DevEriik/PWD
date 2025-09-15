<?php

class verificaPass{

    //*SIMULACION DE BASE DE DATOS DE USUARIOS
   private $usuarios_db = [

        [
            "usuario" => "admin",
            "clave" => "admin123"
        ], 

        [
            "usuario" => "erick",
            "clave" => "erick123"
        ], 

        [
            "usuario" => "maria",
            "clave" => "passmaria"
        ]
        
    ];

    

    public function verificarUsuario($usuario, $clave){

        $bandera = false;

        foreach ($this->usuarios_db as $datos) {
            
            if ($datos['usuario'] === $usuario && $datos['clave'] === $clave) {
                
                $bandera = true;
            }
        }

        return $bandera;

        
    }
}

?>