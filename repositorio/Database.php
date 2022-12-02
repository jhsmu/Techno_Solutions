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

        private function actualizar($query, $data) {
            $connection = $this->conectar();
            $statement = $connection->prepare($query);
            $statement->execute($data);
            return $statement->rowCount() > 0;
        }

        private function consultarConCondicion($query, $parametrosCondicion) {
            $connection = $this->conectar();
            $statement = $connection->prepare($query);
            $statement->execute($parametrosCondicion);
            return $statement->fetch();
        }

        private function consultarListaConCondicion($query, $parametrosCondicion) {
            $connection = $this->conectar();
            $statement = $connection->prepare($query);
            $statement->execute($parametrosCondicion);
            return $statement->fetchAll();
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

        // FUNCIONES PARA EL MANEJO DEL CARRITO

        public function consultarProductoEnCarrito($idUsuario, $idProducto) {
            $query = "SELECT id, cantidad FROM carrito WHERE id_usuario = ? AND id_producto = ?";
            $data = [$idUsuario, $idProducto];
            return $this->consultarConCondicion($query, $data);
        }

        public function consultarCarrito($idUsuario) {
            $query = "SELECT c.id, p.nombre, c.cantidad, p.precio as 'precio_unitario' ,(p.precio * c.cantidad) as 'precio_total' 
                FROM carrito as c
                JOIN productos as p on c.id_producto = p.id
                WHERE c.id_usuario = ?";
            return $this->consultarListaConCondicion($query, [$idUsuario]);;
        }

        public function agregarProductoAlCarrito($idUsuario, $idProducto, $cantidad) {
            $query = "INSERT INTO carrito (id_usuario, id_producto, cantidad) VALUES(?,?,?)";
            $data = [$idUsuario, $idProducto, $cantidad];
            $this->insertar($query, $data);
        }

        public function actualizarProductoEnCarrito($idCarrito, $cantidad) {
            $query = "UPDATE carrito SET cantidad = ? WHERE id = ?";
            $data = [$cantidad, $idCarrito];
            return $this->actualizar($query, $data);
        }

    
        public function eliminarProductoDelCarrito($idCarrito) {
            $query = "DELETE FROM carrito WHERE id = ?";
            $this->borrar($query, [$idCarrito]);;
        }
    }
?>