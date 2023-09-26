<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_equipo) as numequipo FROM equipos where estado='V';";
$listado=$conex->prepare($query);
$listado->execute();
$listcountmarca=$listado->fetchAll();

foreach($listcountmarca as $countmarca) 
{
    echo 
    ' <span class="font-weight-bold">'.$countmarca["numequipo"].'</span> Equipo(s)';
}

$conex=null;


?>