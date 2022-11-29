<?php
$conexion = mysqli_connect('localhost','root','','registros');

// if($conexion{
//     echo "conexion exitosa";
// }else{
//     echo "no se pudo";
// }
    if(isset($_POST['registrate'])){
        if(strlen($_POST['nombre']) >= 1&&
        strlen($_POST['apellido']) >= 1&&
        strlen($_POST['documento']) >= 1&&
        strlen($_POST['usuario']) >= 1&&
        strlen($_POST['clave']) >= 1&&
        strlen($_POST['direccion']) >= 1&&
        strlen($_POST['telefono']) >= 1){
            
            $nombre = ($_POST['nombre']);
            $apellido = ($_POST['apellido']);
            $documento = ($_POST['documento']);
            $usuario = ($_POST['usuario']);
            $clave = ($_POST['clave']);
            $direccion = ($_POST['direccion']);
            $telefono = ($_POST['telefono']);
            $fechareg = date("d/m/y");
            $consultar = "INSERT INTO datos(nombre,apellido, usuario, correo, direccion, clave, telefono, documento) 
            VALUES (' $nombre','$apellido','$usuario','$correo','$direccion','$clave','$telefono','$documento','$fechareg')";
            $resultado= mysql_query($conexion,$consultar);
            if($resultado){
                <?php
                    <h3 class = "exitoso" >Te has inscrito correctamente</h3>
                ?>
            }else{
                <?php
                    <h3 class = "fallo" >!ups ha ocurrio un error</h3>
                ?>
            }
        }else{
            <?php
                    <h3 class = "fallo" >Por favor complete todo los campos </h3>
                ?>
        }
    }
?>