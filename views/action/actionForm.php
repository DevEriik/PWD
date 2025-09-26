<?php 
include_once ("../../controllers/4/auto.php");
include_once ("../../controllers/4/persona.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {

    $objAuto = new AutoControl();
    $objPersona = new PersonaControl();
    
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

        case 'tp1e7':
            require_once("../../controllers/1/E7/controlCalculadora.php");
            $control = new controlCalculadora();
            $operacion = $_GET['operacion'];
            $num1 = $_GET['valor1'];
            $num2 = $_GET['valor2'];
            $resultado = $control->realizarOperacion($num1, $num2, $operacion);

            //?Redirigo pasando los valores por URL 
            header("Location: ../../?page=tp1&ejercicio=E7&resultado=$resultado");
            break;

        case 'tp1e8':
            require_once("../../controllers/1/E8/controlEdadEstudio.php");
            $control = new controlEdadEstudio();
            $edad = $_GET['edad-est'];
            $estudio = $_GET['estudiantes'];
            $resultado = $control->controlarEdadEstudio($edad, $estudio);

            //?Redirigo pasando los valores por URL 
            header("Location: ../../?page=tp1&ejercicio=E8&edad-est=$edad&estudiantes=$estudio&resultado=$resultado");
            break;

        case 'tp2e3':
            require_once("../../controllers/2/E3/verificaPass.php");
            $controlPass = new verificaPass();
            $usuario = $_POST['usuario'];
            $pass = $_POST['password'];
            $verificar = $controlPass->verificarUsuario($usuario, $pass);
            
            if ($verificar) {
                
                //?Si la verificacion es true redireccionamos a la bienvenida. 
                header("Location: ../../?page=tp2&ejercicio=bienvenida");
            }else{

                //?Si la verificacion es false alertamos al usuario.
                header("Location: ../../?page=tp2&ejercicio=E3&Error=Error");
            }
            
            break;

        case 'tp2e4':
            $titulo = $_GET['input-title'];
            $actores = $_GET['input-actores'];
            $director = $_GET['input-director'];
            $guion = $_GET['input-guion'];
            $produccion = $_GET['input-produccion'];
            $anio = $_GET['input-anio'];
            $nacionalidad = $_GET['nacionalidad'];
            $genero = $_GET['genero-select'];
            $duracion = $_GET['input-duracion'];
            $restriccion = $_GET['input-restriccion'];

            //?Mandamos datos por URL. 
            header("Location: ../../?page=tp2&ejercicio=E4&input-title=$titulo&input-actores=$actores&input-director=$director&input-guion=$guion&input-produccion=$produccion&input-anio=$anio&nacionalidad=$nacionalidad&genero-select=$genero&input-duracion=$duracion&input-restriccion=$restriccion");
            
            break;

        case 'tp3e1':
            require_once("../../controllers/3/E1/controlSubirArchivo.php");
            $archivo = $_FILES['form-subir'];
            $nombreArchivo = $_FILES['form-subir']['name'];
            $control = new controlSubirArchivo();
            $resultado = $control->controlarArchivo($archivo);

            if (!$resultado) {
                header("Location: ../../?page=tp3&ejercicio=E1&resultado=$resultado");
            }else{
                header("Location: ../../?page=tp3&ejercicio=E1&enlace=$resultado&nombre=$nombreArchivo");
            }

            break;

        case 'tp3e2':
            require_once("../../controllers/3/E2/controlTXT.php");
            $archivo = $_FILES['input-txt'];
            $control = new controlTXT();
            $resultado = $control->controlarArchivoTXT($archivo);


            header("Location: ../../?page=tp3&ejercicio=E2&resultado=$resultado");
                
            break;

        case 'tp3e3':
            require_once("../../controllers/3/E3/controlCine.php");
            $archivo = $_FILES['input-file'];
            $control = new controlCine();
            $img = $control->controlarImg($archivo);

            $titulo = $_POST['input-title'];
            $actores = $_POST['input-actores'];
            $director = $_POST['input-director'];
            $guion = $_POST['input-guion'];
            $produccion = $_POST['input-produccion'];
            $anio = $_POST['input-anio'];
            $nacionalidad = $_POST['nacionalidad'];
            $genero = $_POST['genero-select'];
            $duracion = $_POST['input-duracion'];
            $restriccion = $_POST['input-restriccion'];

            if ($img == "Error.") {
                header("Location: ../../?page=tp3&ejercicio=E3&resultado=$img");
            }else{
                header("Location: ../../?page=tp3&ejercicio=E3&input-title=$titulo&input-actores=$actores&input-director=$director&input-guion=$guion&input-produccion=$produccion&input-anio=$anio&nacionalidad=$nacionalidad&genero-select=$genero&input-duracion=$duracion&input-restriccion=$restriccion&resultado=$img");
            }

                
            break;

         
        case "buscarAuto":
            $patente = trim($_POST['patente'] ?? "");
            if ($patente === "") {
                $resultado = "No se ingresó ninguna patente.";
                echo "3";
            } else {
                $auto = $objAuto->buscarAuto($patente);
                if ($auto) {
                    $dueño = $objPersona->buscarPersona($auto->getDniDuenio());
                    $resultado = "Auto: {$auto->getPatente()} - {$auto->getMarca()} {$auto->getModelo()}<br>Dueño: " .
                                ($dueño ? $dueño->getNombre() . " " . $dueño->getApellido() : "Desconocido");
                    $exito = true;
                } else {
                    $resultado = "No se encontró ningún auto con esa patente.";
                }
            }
            break;

        case "registrarPersona":
            $nroDni = trim($_POST['nroDni'] ?? "");
            $apellido = trim($_POST['apellido'] ?? "");
            $nombre = trim($_POST['nombre'] ?? "");
            $fechaNac = trim($_POST['fechaNac'] ?? "");
            $telefono = trim($_POST['telefono'] ?? "");
            $domicilio = trim($_POST['domicilio'] ?? "");
            if ($nroDni && $apellido && $nombre && $fechaNac && $telefono && $domicilio) {
                $exito = $objPersona->agregarPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
                $resultado = $exito ? "Persona registrada correctamente." : "No se pudo registrar la persona.";
            } else {
                $resultado = "Todos los campos son obligatorios.";
            }
            break;

        case "registrarAuto":
            $patente = trim($_POST['patente'] ?? "");
            $marca = trim($_POST['marca'] ?? "");
            $modelo = trim($_POST['modelo'] ?? "");
            $dniDuenio = trim($_POST['dniDuenio'] ?? "");
            if ($patente && $marca && $modelo && $dniDuenio) {
                $dueño = $objPersona->buscarPersona($dniDuenio);
                if ($dueño) {
                    $exito = $objAuto->agregarAuto($patente, $marca, $modelo, $dniDuenio);
                    $resultado = $exito ? "Auto registrado correctamente." : "No se pudo registrar el auto (patente repetida).";
                } else {
                    $resultado = "El dueño no existe. Registre primero a la persona.";
                }
            } else {
                $resultado = "Todos los campos son obligatorios.";
            }
            break;

        case "cambiarDuenio":
            $patente = trim($_POST['patente'] ?? "");
            $dniNuevo = trim($_POST['dniDuenio'] ?? "");
            if ($patente && $dniNuevo) {
                $auto = $objAuto->buscarAuto($patente);
                $persona = $objPersona->buscarPersona($dniNuevo);
                if ($auto && $persona) {
                    $exito = $objAuto->cambiarDuenio($patente, $dniNuevo);
                    $resultado = $exito ? "Dueño cambiado correctamente." : "No se pudo cambiar el dueño.";
                } else {
                    $resultado = "Auto o persona no encontrados.";
                }
            } else {
                $resultado = "Todos los campos son obligatorios.";
            }
            break;

        case "actualizarPersona":
            $nroDni = trim($_POST['nroDni'] ?? "");
            $apellido = trim($_POST['apellido'] ?? "");
            $nombre = trim($_POST['nombre'] ?? "");
            $fechaNac = trim($_POST['fechaNac'] ?? "");
            $telefono = trim($_POST['telefono'] ?? "");
            $domicilio = trim($_POST['domicilio'] ?? "");
            if ($nroDni && $apellido && $nombre && $fechaNac && $telefono && $domicilio) {
                $exito = $objPersona->actualizarPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
                $resultado = $exito ? "Datos actualizados correctamente." : "No se pudo actualizar la persona.";
            } else {
                $resultado = "Todos los campos son obligatorios.";
            }
            break;

        
        default:
            # code...
            break;
    }
}


?>