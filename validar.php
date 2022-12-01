<?php

   require("./conexion.php");

    $db = new Database();
    $connection = $db -> connect();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['documento'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];   

        // $query1 = ("INSERT INTO datos(nombre,apellido,documento,usuario,clave,correo,direccion,telefono) VALUES(?,?,?,?,?,?,?,? )");
        // $query = $connection -> prepare($query1);
    
       $query = $connection -> prepare("INSERT INTO datos(`nombre`,`apellido`,`documento`,`usuario`,`clave`,`correo`,`direccion`,`telefono`) VALUES(?,?,?,?,?,?,?,?)");
    
        $resultado = $query->execute(['nombre'=>$nombre,'apellido'=>$apellido,'documento'=>$documento,'usuario'=>$usuario,'clave'=>$clave,'correo'=>$correo,'direccion'=>$direccion,'telefono'=>$telefono]);
    
        if($resultado){
            header("location: login.html");
        }
   
//forma 2

// require("./conexion.php");

// if(!empty($_POST['nombre'])&&
// !empty($_POST['apellido'])&&
// !empty($_POST['correo'])&&
// !empty($_POST['usuario'])&&
// !empty($_POST['clave'])&&
// !empty($_POST['direccion'])&&
// !empty($_POST['telefono'])&&
// !empty($_POST['documento'])){
    
//     $nombre = $_POST['nombre'];
//     $apellido = $_POST['apellido'];
//     $documento = $_POST['documento'];
//     $usuario = $_POST['usuario'];
//     $clave = $_POST['clave'];
//     $correo = $_POST['correo'];
//     $direccion = $_POST['direccion'];
//     $telefono = $_POST['telefono'];  

//     $sql = ("INSERT INTO datos(nombre,apellido,documento,usuario,clave,correo,direccion,telefono) VALUES(:nombre,:apellido,:documento,:usuario,:clave,:correo,:direccion,:telefono)");

//     $stml = $conexion -> prepare($sql);
//     $stml->bindParam(":nombre",$nombre);
//     $stml->bindParam(":apellido",$apellido);
//     $stml->bindParam(":documento",$documento);
//     $stml->bindParam(":usuario",$usuario);
//     $stml->bindParam(":clave",$clave);
//     $stml->bindParam(":correo",$correo);
//     $stml->bindParam(":direccion",$direccion);
//     $stml->bindParam(":telefono",$telefono);
//     if($stml->execute){
//         header("location:login.html");
//     }else{
//         echo "no se registrar";
//     }
// }
?>




