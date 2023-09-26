<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_equipo) as numequi FROM equipos where estado='V' or estado='A';";
$listado=$conex->prepare($query);
$listado->execute();
$listcountequi=$listado->fetchAll();

foreach($listcountequi as $countequi) 
{
    echo 
    ' <span class="font-weight-bold">'.$countequi["numequi"].'</span> Equipo(s)';
}

$conex=null;


?>