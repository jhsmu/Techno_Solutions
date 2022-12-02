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
            <div class='row'>
                <div class='col-md-12'>
                    <form action='./controladores/eliminarProductoDelCarrito.php' method='POST'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title'>Nombre: ". $producto['nombre'] ."</h5>
                                <p class='card-text'>Cantidad: ". $producto['cantidad'] ."</p>
                                <p class='card-text'>Precio unitario: ". $producto['precio_unitario'] ."</p>
                                <p class='card-text'>Precio unitario: ". $producto['precio_total'] ."</p>
                                <button class='btn'>Eliminar</button>
                                <input type='text' name='idCarrito' style='display:none' value='". $producto['id'] ."'> 
                            </div>
                        </div> 
                    </form>
                </div>
            </row>
            ";

            $precioTotal += $producto['precio_total'];
        }
        
        $html .= "<p>El precio total es $precioTotal</p>";

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