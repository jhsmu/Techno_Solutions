<?php
    require("./repositorio/Session.php");

    $session = new Session();
    
    if(!$session->laSesionEstaActiva()) return;

    header("Location: inicio.php");
    exit();
?>