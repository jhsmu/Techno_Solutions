<?php
    try {
        require("./validaciones/validador.php");
        require("./repositorio/Database.php");
    
        $validador = new Validador();
        $db = new Database();
    
        $productos = $db->consultarProductos();
    
        if(!$validador->validarDatos($productos)) return;
    
        $lista = "";
        $contador = 0;

        foreach($productos as $producto) {

            if($contador == 0) $lista .= "<div class='row'>";

            $lista .= "
            <div class='col-md-6'>
                <form action='./controladores/agregarProductoAlCarrito.php' method='POST'>
                    <div class='card'>
                        <img src='". $producto['imagen'] ."' class='responsive image' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>". $producto['nombre'] ."</h5>
                            <p class='card-text'>". $producto['descripcion'] ."</p>
                            <button class='btn'>Agregar al Carrito</button>
                            <input type='number' name='cantidad' placeholder='cantidad' min='1'> 
                            <input type='text' name='idProducto' style='display:none' value='". $producto['id'] ."'> 
                        </div>
                    </div> 
                </form>
            </div>
            ";

            $contador++;
            
            if($contador == 2) {
                $lista .= "</div>";
                $contador = 0;
            }
        }
    
        echo $lista;
    } catch (Exception $e) {
        echo $e->getMessage();
    }   
?>
