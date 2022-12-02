<?php
    require("./repositorio/Session.php");

    $session = new Session();
    
    if($session->laSesionEstaActiva()) return;

    $session->cerrarSession();

    header("Location: registrate.php");
    exit();
?>