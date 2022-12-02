<?php
    try {
        require("../validaciones/validador.php");
        require("../repositorio/Database.php");

        $validador = new Validador();
        $idCarrito = $_POST["idCarrito"];

        $losDatosSonValidos = $validador->validarDatos($idCarrito);
    
        if(!$losDatosSonValidos) {
            header("Location: ../login.php?mensaje=Ocurrió un error al eliminar el producto del carrito");
            return;
        } 

        $db = new Database();
        $resultado = $db->eliminarProductoDelCarrito($idCarrito);
        
        header("Location: ../carrito.php?alerta=Se eliminó el producto del carrito");
        exit();
    } catch (Exception $e){
        header("Location: ../carrito.php?mensaje=Ocurrió un error inesperado");
    }
?>