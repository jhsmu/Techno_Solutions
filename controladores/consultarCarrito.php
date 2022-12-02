<?php
    try {
        require("./validaciones/validador.php");
        require("./repositorio/Database.php");
        
        $validador = new Validador();
        $db = new Database();
    
        $idUsuario = $session->obtenerIdUsuario();

        $productos = $db->consultarCarrito($idUsuario);

        if(!$validador->validarDatos($productos)) {
            header("Location: producto.php?mensaje=Aún no has agregado productos al carrito");
            return;
        }
    
        $html = "";
        $precioTotal = 0;

        foreach($productos as $producto) {

            $html .= "
            <form action='./controladores/eliminarProductoDelCarrito.php' method='POST'>
            <div class='row'>
                <div class='col-md-12'>
                    
                <div class='row'>
                <div class='col-md-11>
                    <h5 class='card-title'>Nombre: ". $producto['nombre'] ."</h5>
                </div>

                <div class='col-md-1'>
                    <input type='text' name='idCarrito' style='display:none' value='". $producto['id'] ."'> 
                </div>
            </div>

            <div class='row'>
            <div class='col-md-12'>
                <p class='card-text'>Cantidad: ". $producto['cantidad'] ."</p>
            </div>
            </div>

            <div class='row'>
                <div class='col-md-5'>
                    <p class='card-text'>Precio unitario: ".  $producto['precio_unitario'] ."</p>
                </div>

                <div class='col-md-5'>
                    <p class='card-text'>Precio total: ".  $producto['precio_total'] ."</p>
                </div>

                <div class='col-md-2'>
                    <button class='btn'>Eliminar</button>
                </div>
            </div>
                   
                </div>
            </div>
            </form>
            <hr class='hr'/>
            ";

            $precioTotal += $producto['precio_total'];
        }
        
        $html .= "<p>El precio total es $$precioTotal</p>";

        $html .= "
        <form action='./controladores/finalizarCompra.php' method='POST'>
            <div class='form-group'>
                <input type='submit' class='btn btn-success' value='Pagar'>
                <input type='text' style='display:none' value='$precioTotal' name='valorTotal'>
            </div>
        </form>";

        echo $html;
    } catch (Exception $e) {
        header("Location: ../producto.php?mensaje=Ocurrió un error inesperado");
    }   
?>