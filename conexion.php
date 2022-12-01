<?php

class Database
{
    private $host="localhost";
    private $dbname="registros";
    private $username="root";
    private $password=" ";
    private $charset="utf8";
    public function connect(){
        $conexion = "mysql: host=".$this->host."; dbname=".$this ->dbname."; charset=".$this ->charset;
        $option=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
    
        try{
            $pdo = new PDO($conexion, $this ->username,$this->password, $option);
            return $pdo;
        }catch(PDOException $e){
            return "Error:".$e->getMessage();
            die();
        }
    }
}
?>

