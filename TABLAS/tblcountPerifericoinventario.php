<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_equipo) as numequi, tipo FROM equipos where tipo=2 and (estado='V' or estado='A');";
$listado=$conex->prepare($query);
$listado->execute();
$listcountequi=$listado->fetchAll();

foreach($listcountequi as $countequi) 
{
    echo 
    ' <span class="font-weight-bold">'.$countequi["numequi"].'</span> Periferico(s)';
}

$conex=null;


?>