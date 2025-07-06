<?php
    class vehiculo {
    private $nombre;
    private $marca;
    private $modelo;
    private $color;
    private $año;
    private $foto;
    //Marca
    public function setMarca($marca){
        return $this->marca=$marca;
    }
    public function getMarca(){
        return $this->marca;
    }
    //Modelo
    public function setModelo($modelo){
        return $this->modelo=$modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }
    //Color
    public function setColor($color){
        return $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
    //Año
    public function setAño($año){
        return $this->año=$año;
    }
    public function getAño(){
        return $this->año;
    }
    //Foto
    public function setFoto($foto){
        return $this->foto=$foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function getNombre() {
      return $this->nombre;
    }
    public function setNombre($nombre) {
      $this->nombre = $nombre;  
    }
}
    ?>