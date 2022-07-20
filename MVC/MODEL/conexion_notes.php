<?php


require('conexion.php');
class notes extends conexion{
    private $notes;
    public function __construct() //constructor versión moderna php 7.0 en adelante
    {
        parent::__construct(); //este es el constructor del archivo conexion.php
        $this->notes=array();
    }

    public function tarerNotasFijadas(){
        $sql="SELECT * FROM notes WHERE fixed=:_fixed";
        $sentencia=$this->conexiondb->prepare($sql);
        $sentencia->execute(array(":_fixed"=>"Yes"));
    
        while($productos=$sentencia->fetch(PDO::FETCH_ASSOC)){
            $this->notes[]=$productos;
        }
        return $this->notes;

    }
}

