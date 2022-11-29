<?php 

$conexion = mysqli_connect('localhost','root','','registros');

insertar($conexion);

function insertar($conexion){
    $nombre = ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $documento = ($_POST['documento']);
    $usuario = ($_POST['usuario']);
    $clave = ($_POST['clave']);
    $correo = ($_POST['correo']);
    $direccion = ($_POST['direccion']);
    $telefono = ($_POST['telefono']);

    $consultar = "INSERT INTO datos(nombre,apellido, usuario, correo, direccion, clave, telefono, documento) 
    VALUES ('$nombre','$apellido','$usuario','$correo','$direccion','$clave','$telefono','$documento')";
    mysqli_query($conexion,$consultar);
    mysqli_close($conexion);
}
?>