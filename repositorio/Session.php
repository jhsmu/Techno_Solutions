<?php
    class Session {
        function __construct() {
            session_start();
        }

        public function obtenerIdUsuario() {
            return isset($_SESSION["idUsuario"]) ? $_SESSION["idUsuario"] : "";
        }

        public function guardarIdUsuario($idUsuario) {
            $_SESSION["idUsuario"] = $idUsuario;
        }

        public function laSesionEstaActiva() {
            $idUsuario = $this->obtenerIdUsuario();
            return !empty($idUsuario);
        }

        public function cerrarSession() {
            session_destroy();
        }
    }
?>