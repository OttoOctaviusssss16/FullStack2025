<?php
    class vehiculo {
    private $marca;
    private $modelo;
    private $color;
    private $cantidaddepuertas;
    private $cantidadderuedas;
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
    //Cantidad de Puertas
    public function setPuertas($cantidaddepuertas){
        return $this->cantidaddepuertas=$cantidaddepuertas;
    }
    public function getPuertas(){
        return $this->cantidaddepuertas;
    }
    //Cantidad de Ruedas
    public function setRuedas($cantidadderuedas){
        return $this->cantidadderuedas=$cantidadderuedas;
    }
    public function getRuedas(){
        return $this->cantidadderuedas;
    }
    //Foto
    public function setFoto($foto){
        return $this->foto=$foto;
    }
    public function getFoto(){
        return $this->foto;
    }
}
    ?>