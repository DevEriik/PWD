<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $accion = $_POST['accion'] ?? $_GET['accion'];

    switch ($accion) {
        case 'tp1e1':
            require_once("../../controllers/1/E1/controlNum.php");
            $control = new controlNum();
            $numero = $_POST['numero'];
            
            if (is_numeric($numero)) {
                $resultado = $control->verificarNum($numero);
            } else {
                $resultado = "Error.";
            }

            //?Redirigo pasando los valores por URL
            header("Location: ../../?page=tp1&ejercicio=E1&numero=$numero&resultado=$resultado"); 
            exit();
            break;

        case 'tp1e2':
            require_once("../../controllers/1/E2/controlCursada.php");
            $control = new controlCursada(); 
            $cronograma = $_GET;
            $resultado = $control->calcularCargaHoraria($cronograma);

            //?Redirigo pasando los valores por URL
            header("Location: ../../?page=tp1&ejercicio=E2&resultado=$resultado");
            break;

        case 'tp1e3':
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $edad = $_GET['edad'];
            $direccion = $_GET['direccion'];

            //?Redirigo pasando los valores por URL
            header("Location: ../../?page=tp1&ejercicio=E3&nombre=$nombre&apellido=$apellido&edad=$edad&direccion=$direccion");
            break;

        case 'tp1e4':
            require_once("../../controllers/1/E4/controlEdad.php");
            $control = new controlEdad();
            $edad = $_GET['edad'];
            $resultado = $control->registrarEdad($edad);

            //?Redirigo pasando los valores por URL
            header("Location: ../../?page=tp1&ejercicio=E4&edad=$edad&resultado=$resultado");
            break;

        case 'tp1e5':
            require_once("../../controllers/1/E5/controlEstudio.php");
            $control = new controlEstudio();
            $estudio = $_GET['nivel-estudio'];
            $sexo = $_GET['sexo'];
            $resultado = $control->tipoEstudio($estudio);

            //?Redirigo pasando los valores por URL
            header("Location: ../../?page=tp1&ejercicio=E5&nivel-estudio=$estudio&sexo=$sexo");
            break;

        case 'tp1e6':
            require_once("../../controllers/1/E6/controlDeporte.php");
            $control = new controlDeporte();
            $deportes = $_GET['deporte'] ?? [];
            $resultado = $control->cantDeportes($deportes);

            //?Redirigo pasando los valores por URL
            header("Location: ../../?page=tp1&ejercicio=E6&resultado=$resultado");
            break;
        
        default:
            # code...
            break;
    }
}


?>