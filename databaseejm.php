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
            try {
                $statement = $connection->prepare($query);

                $connection->beginTransaction();
                $statement->execute($data);
                $connection->commit();

                return $connection->lastInsertId();
            } catch (Exception $e) {
                $connection->rollBack();
                echo("Error: ".$e->getMessage());
                die();
            } 
        }

        private function consultar($query) {
            $connection = $this->conectar();
            try {
                $statement = $connection->query($query);
                return $statement->fetchAll();
            } catch (Exception $e) {
                echo("Error: ".$e->getMessage());
                die();
            } 
        }

        private function borrar($query, $data) {
            $connection = $this->conectar();
            try {
                $statement = $connection->prepare($query);

                $connection->beginTransaction();
                $statement->execute($data);
                $connection->commit();

            } catch (Exception $e) {
                $connection->rollBack();
                echo("Error: ".$e->getMessage());
                die();
            }
        }

        private function consultarConCondicion($query, $parametrosCondicion) {
            $connection = $this->conectar();
            try {
                $statement = $connection->prepare($query);
                $statement->execute($parametrosCondicion);
                return $statement->fetch();
            } catch (Exception $e) {
                echo("Error: ".$e->getMessage());
                die();
            } 
        }
    }
?>