<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_equipo) as numbequipo from equipos;";
$listado=$conex->prepare($query);
$listado->execute();
$listcountequi=$listado->fetchAll();

foreach($listcountequi as $countequi) 
{
    echo 
    ' <span class="font-weight-bold">'.$countequi["numbequipo"].'</span> Equipo(s)';
}

$conex=null;


?>



