<?php
    $paginaError = "../carrito.php?mensaje=Ocurrío un error finalizando la compra, por favor intentalo de nuevo";

    try{
        require("../validaciones/validador.php");
        
        require("../repositorio/Database.php");
        require("../repositorio/Session.php");
        
        $validador = new Validador();

        $valorTotal = $_POST["valorTotal"];
    
        if(!$validador->validarDatos($valorTotal)){
            header("Location: $paginaError");
            return;
        }

        $session = new Session();
        $db = new Database();
    
        $idUsuario = $session->obtenerIdUsuario();
        $db->vaciarCarrito($idUsuario);
 
        header("Location: ../producto.php?alerta=Compra finalizada con exito por un valor de $valorTotal COP");
        exit();
        
    } catch (Exception $e) {
        header("Location: $paginaError");
    }
?>