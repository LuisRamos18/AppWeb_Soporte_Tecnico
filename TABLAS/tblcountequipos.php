<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_equipo) as numequipo FROM equipos where (estado='V' or estado='A');";
$listado=$conex->prepare($query);
$listado->execute();
$listcountequipo=$listado->fetchAll();

foreach($listcountequipo as $countequipo) 
{
    echo 
    ' <span class="font-weight-bold">'.$countequipo["numequipo"].'</span> Equipo(s)';
}

$conex=null;


?>