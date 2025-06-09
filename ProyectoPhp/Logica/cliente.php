<?php
class cliente {
    private $nombre;
    private $telefono;
    private $edad;
    private $direccion;
    private $email;
    private $contraseña;
    private $tipo;


//Nombre
    public function getNombre() {
      return $this->nombre;
    }
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }
//Telefono
    public function getTelefono() {
      return $this->telefono;
    }
    public function setTelefono($telefono) {
      $this->telefono = $telefono;
    }
//Edad
    public function getEdad() {
      return $this->edad;
    }
    public function setEdad($edad) {
      $this->edad = $edad;
    }
//Direccion
    public function getDireccion() {
      return $this->direccion;
    }
    public function setDireccion($direccion) {
      $this->direccion = $direccion;
    }
//Email
    public function getEmail() {
      return $this->email;
    }
    public function setEmail($email) {
      $this->email = $email;
    }
//Contraseña
    public function getContraseña() {
      return $this->contraseña;
    }
    public function setContraseña($contraseña) {
      $this->contraseña = $contraseña;
    }
//Tipo
    public function getTipo() {
      return $this->tipo;
    }
    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }
}