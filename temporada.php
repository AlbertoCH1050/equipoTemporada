<html>
<title></title>
<body>
    

<?php
include "claseJugador.php";
include "claseEquipo.php";

$jugadoresTemporada=new Equipo();
for($i=0; $i<9; $i++){
    $jugador= new Jugador($i);
    $jugador->addPtos(rand(20, 100));
    echo "<h5>El jugador con dorsal ".$jugador->getNumJug()." ha logrado esta temporada un total de " .$jugador->getPtos(). " puntos.</h5>";
    $jugadoresTemporada->addJug($jugador);
}

    echo "<h1> El total de puntos logrado por el equipo esta temporada es: " .$jugadoresTemporada->getTotal(). "</h1>";

?>
</body>
</html>