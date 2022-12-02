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

            if($contador == 0) $lista .= "<div class='row mt-5'>";
            
            $lista .= "
            <div class='col-md-4'>
                <form action='./controladores/agregarProductoAlCarrito.php' method='POST'>
                    <div class='card'>
                        <img src='". $producto['imagen'] ."' class='' style='witdh:200px; height:250px;,object-fit: contain;' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>". $producto['nombre'] ."</h5>
                            <p class='card-text'>". $producto['descripcion'] ."</p>
                            <div class='row'>
                                <div class='col-md-5'>
                                    <input type='number' name='cantidad' placeholder='cantidad' min='1' class='form-control'> 
                                    <input type='text' name='idProducto' style='display:none' value='". $producto['id'] ."'>    
                                </div>
                                <button class='btn col-md-6'>Agregar al Carrito</button>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>";
            
            $contador++;
            
            if($contador == 3) {
                $lista .= "</div>";
                $contador = 0;
            }
        }
    
        $lista .= "</div>";    
        echo $lista;
    } catch (Exception $e) {
        echo $e->getMessage();
    }   
?>
