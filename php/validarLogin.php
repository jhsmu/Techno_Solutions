<?php
$conexion = mysqli_connect('localhost','root','','registros');

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$verificar = "SELECT * FROM datos WHERE usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($conexion,$verificar);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    header("location:a.html");
}else{
    echo "error";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>