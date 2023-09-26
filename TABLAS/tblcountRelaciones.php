<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_asignar) as numasignacion FROM relacion";
$listado=$conex->prepare($query);
$listado->execute();
$listcountasig=$listado->fetchAll();

foreach($listcountasig as $countasig) 
{
    echo 
    ' <span class="font-weight-bold">'.$countasig["numasignacion"].'</span> Relacion(es)';
}

$conex=null;


?>