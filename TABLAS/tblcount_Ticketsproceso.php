<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_ticket) as numtasig FROM tickets where statu='Proceso';";
$listado=$conex->prepare($query);
$listado->execute();
$listcountasig=$listado->fetchAll();

foreach($listcountasig as $countasig) 
{
    echo 
    ' <span class="font-weight-bold">'.$countasig["numtasig"].'</span> En proceso(s)';
}

$conex=null;


?>