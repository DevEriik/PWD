<?php

    //*SIMULACION DE BASE DE DATOS DE USUARIOS
    $usuarios_db = [

        [
            "usuario" => "admin",
            "clave" => "admin123"
        ], 

        [
            "usuario" => "juanperez",
            "clave" => "mipassword123"
        ], 

        [
            "usuario" => "maria",
            "clave" => "passmaria"
        ]
        
    ];

    //!LOGICA PARA VERIFICAR AL USUARIO

    if (isset($_POST)) {
        
        $usuario = $_POST['usuario']; 
        $password = $_POST['password'];

        //*Creamos una variable bandera para ver si lo encontro. 
        $encontro = false;
        foreach ($usuarios_db as $usuariobd) {
            
            //*Verificamos que los datos coincidan. 
            if ($usuario == $usuariobd['usuario'] && $password == $usuariobd['clave'] && $encontro == false) {

                $encontro = true;
            }
        }

        if($encontro == true){
            echo "BIENVENIDO A LA PAGINA WEB.";
        }else {
            echo "ERROR: LOS DATOS INGRESADOS NO SON CORRECTOS.";
        }
    }

?>