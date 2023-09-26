<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_asignacion) as numasi 
FROM asignacion_usuario A inner join equipos E on A.id_equipo=E.id_equipo where estado='A';";
$listado=$conex->prepare($query);
$listado->execute();
$listcountasi=$listado->fetchAll();

foreach($listcountasi as $countasi) 
{
    echo 
    ' <span class="font-weight-bold">'.$countasi["numasi"].'</span> Equipos Asignado(s)';
}

$conex=null;


?>