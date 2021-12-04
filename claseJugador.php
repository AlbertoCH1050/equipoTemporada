<?php

class Jugador{
    private $numeroJug;
    private $ptos;

    function __construct($numeroJug)
    {
        $this->numeroJug=$numeroJug;
        $this->ptos=0;
    }

    function getNumJug(){
        return $this->numeroJug;
    }
    
    function getPtos(){
        return $this->ptos;
    }

    function addPtos($ptos){
        if($ptos>0){
            $this->ptos=$this->ptos+$ptos; //*Tambien puede expresarse $this->ptos+=$ptos*//
        }

    }


}
?>