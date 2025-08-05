<?php
class conexion {
 private $servername = "localhost";
 private $username = "root";
 private $password = "";
 private $dbname = "automotora";

 private $conexionBD;

 public function __construct() {
    //Verificar la conexión
    $this->conexionBD = new mysqli(
        $this->servername,
        $this->username,
        $this->password,
        $this->dbname
    );
    //Verificar la conexion
    if ($this->conexionBD->connect_error) {
        die("Error al conectar: " . $this->conexionBD->connect_error);
    }
 }
 
 public function getConexion() {
    return $this->conexionBD;
 }

 public function CerrarConexion() {
    $this->conexionBD->close();
 }
}