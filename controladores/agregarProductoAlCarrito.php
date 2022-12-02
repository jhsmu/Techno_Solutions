<?php
   try {
    require("../validaciones/validador.php");
    require("../repositorio/Database.php");
    require("../repositorio/Session.php");

    $validador = new Validador();    

    $idProducto = $_POST["idProducto"];
    $cantidad = $_POST["cantidad"];

    $datos = [$idProducto, $cantidad];
    $losDatosSonValidos = $validador->validarDatos($datos);

    if(!$losDatosSonValidos) {
        header("Location: ../producto.php?mensaje=Asegurate de ingresar todos los datos para poder agregar el producto al carrito");
        return;
    } 
        
    $sesion =  new Session();
    $idUsuario = $sesion->obtenerIdUsuario();
    
    $db = new Database();
    $resultado = $db->agregarProductoAlCarrito($idUsuario, $idProducto, $cantidad);

    header("Location: ../producto.php?alerta=Se agregó el producto al carrito");
    exit();

   } catch (Exception $e){
    header("Location: ../producto.php?mensaje=Ocurrió un error inesperado");
   }
?>