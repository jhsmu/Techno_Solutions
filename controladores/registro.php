<?php
    try {
        require("../validaciones/validador.php");
        $validador = new Validador();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['documento'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono']; 

        $datos = [$nombre, $apellido, $documento, $usuario, $clave, $correo, $direccion, $telefono];
        $losDatosSonValidos = $validador->validarDatos($datos);

        if(!$losDatosSonValidos) {
            header("Location: ../registrate.php?mensaje=Asegurate de ingresar todos los datos del registro");
            return;
        } 

        require("../repositorio/Database.php");
        require("../repositorio/Session.php");

        $db = new Database();
        
        //la funcion retorna un valor, no retorna los parametros que tiene dentro, esos solo lo recibe. 
        $resultado = $db->registrarUsuario(
            $nombre." ".$apellido, 
            $usuario, 
            $documento, 
            $correo, 
            $clave, 
            $telefono, 
            $direccion
        );

        if($resultado === false) {
            header("Location: ../registrate.php?mensaje=Ocurrió un error al realizar el registro, por favor intentalo de nuevo");
            return;
        } 

        $session = new Session();
        $session->guardarIdUsuario($resultado);

        header("Location: ../inicio.php");
        
        exit();
    } catch(Exception $e) {
        header("Location: ../registrate.php?mensaje=Ocurrió un error inesperado");
    }
?>