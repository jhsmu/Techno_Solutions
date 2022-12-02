<?php
    require("../repositorio/Session.php");

    $session = new Session();
    $session->cerrarSession();

    header("Location: ../registrate.php");
    exit();
?>