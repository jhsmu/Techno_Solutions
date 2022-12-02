<?php 
    class Database
    {
        private $host="localhost";
        private $dbname="registros";
        private $username="root";
        private $password="";
        private $charset="utf8";

        public function conectar(){
            
            $connection = "mysql: host=".$this->host."; dbname=".$this->dbname."; charset=".$this->charset;
            
            $option=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

            try {
                $pdo = new PDO(
                    $connection, 
                    $this->username, 
                    $this->password, 
                    $option
                );
                return $pdo;
            } catch(PDOException $e){
                return "Error: ".$e->getMessage();
                die();//Termina la ejecución
            }
        }

        // FUNCIONES PARA REALIZAR CRUD

        private function insertar($query, $data) {
            $connection = $this->conectar();
            $statement = $connection->prepare($query);

            $statement->execute($data);
            return $connection->lastInsertId();
        }

        private function consultar($query) {
            $connection = $this->conectar();
            $statement = $connection->query($query);
            return $statement->fetchAll();
        }

        private function borrar($query, $data) {
            $connection = $this->conectar();
            $statement = $connection->prepare($query);
            $statement->execute($data);
        }

        private function consultarConCondicion($query, $parametrosCondicion) {
            $connection = $this->conectar();
            $statement = $connection->prepare($query);
            $statement->execute($parametrosCondicion);
            return $statement->fetch();
        }

        // FUNCIONES PARA EL MANEJO DEL USUARIO

        public function registrarUsuario($nombre, $usuario, $documento, $correo, $clave, $telefono, $direccion) {
            $query = "INSERT INTO usuarios (nombre, usuario, documento, correo, clave, telefono, direccion) VALUES(?,?,?,?,?,?,?)";
            $data = [$nombre, $usuario, $documento, $correo, $clave, $telefono, $direccion];
            return $this->insertar($query, $data);
        }

        public function verificarUsuario($usuario, $clave) {
            $query = "SELECT * FROM usuarios WHERE usuario = ? AND clave = ? ";
            return $this->consultarConCondicion($query, [$usuario , $clave]);
        }

        // FUNCIONES PARA EL MANEJO DE LOS PRODUCTOS

        public function consultarProductos() {
            $query = "SELECT * FROM productos";
            return $this->consultar($query);
        }
    }
?>