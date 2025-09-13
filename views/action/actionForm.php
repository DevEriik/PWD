<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $accion = $_POST['accion'] ?? '';

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
        
        default:
            # code...
            break;
    }
}


?>