<?php
    try {
        require("../validaciones/validador.php");
        require("../repositorio/Database.php");
        require("../repositorio/Session.php");
    
        $validador = new Validador();
    
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
    
        $datos = [$usuario, $clave];
        $losDatosSonValidos = $validador->validarDatos($datos);
    
        if(!$losDatosSonValidos) {
            header("Location: ../login.php?mensaje=Asegurate de ingresar todos los datos para poder iniciar sesión");
            return;
        } 
        
        $db = new Database();
        $resultado = $db->verificarUsuario($usuario, $clave);
        
        if(!$validador->validarDatos($resultado)) {
            header("Location: ../login.php?mensaje=Usuario o contraseña invalidos");
            return;
        } 
        
        $session = new Session();
        $session->guardarIdUsuario($resultado['id']);
    
        header("Location: ../inicio.php");
        exit();
        
    } catch (Exception $e) {
        header("Location: ../login.php?mensaje=Ocurrió un error inesperado");
    }
?>
