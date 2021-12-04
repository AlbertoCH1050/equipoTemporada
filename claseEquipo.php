<?php
include_once "claseJugador.php";
class Equipo{

    private $Jugadores;

    function __construct()
    {
        $this->Jugadores=array();
        
    }

    function addJug(Jugador $jugador){
        $this->Jugadores[]=$jugador;
    }

    function getJug($numJugador){
        foreach($this->Jugadores as $jugador){
            if($jugador->getNumJug()==$numJugador){
                return $jugador;
            }
        }
        return null;
    }
    function getTotal(){
        $sumaTotalPtos=0;
        foreach($this->Jugadores as $jugador){
            $sumaTotalPtos=$jugador->getPtos()+$sumaTotalPtos;
        }
        return $sumaTotalPtos;
    }
}
?>