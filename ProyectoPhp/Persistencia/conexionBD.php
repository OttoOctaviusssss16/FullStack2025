<?php
class conexion {
 private $servername = "localhost";
 private $username = "root";
 private $password = "";
 private $dbname = "automotora";
 private $conexionBD;

 public function __construct() {
    $this->conexionBD = new mysqli(
        $this->servername,
        $this->username,
        $this->password,
        $this->dbname
    );
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