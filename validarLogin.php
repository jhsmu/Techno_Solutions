<?php
    session_start();
   require("./conexion.php");
   
   $db = new Database();
   $connection = $db -> connect();

 
    $query = "SELECT * FROM datos WHERE usuario = :usuario AND clave = :clave";
    $verificar = $connection -> prepare($query);
    $verificar -> execute(array('usuario' => $_POST['usuario'],'clave' => $_POST['clave']));
    $count = $verificar -> rowCount();
    if($count>0){
        header("location: inicio.html");

    }else if(isset($_POST['usuario'])){
        $_SESSION['usuario'] = $_POST['clave'] ;
        header("location:login.html");
    }
?>