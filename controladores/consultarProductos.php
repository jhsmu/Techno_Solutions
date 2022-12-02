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
                <div class='card'>
                    <img src='". $producto['imagen'] ."' class='responsive image' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>". $producto['nombre'] ."</h5>
                        <p class='card-text'>". $producto['descripcion'] ."</p>
                        <a href=' class='btn'>Agregar al Carrito</a>
                    </div>
                </div>
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
