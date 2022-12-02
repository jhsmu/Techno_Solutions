<?php
    class Session {

        function __construct() {
            session_start();
        }

        public function obtenerIdUsuario() {
            return isset($_SESSION["id"]) ? $_SESSION["id"] : "";
        }

        public function guardarIdUsuario($idUsuario) {
            $_SESSION["idUsuario"] = $idUsuario;
        }
    }
?>