<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_usuario) as numuser FROM usuarios where activo='SI'";
$listado=$conex->prepare($query);
$listado->execute();
$listcountuser=$listado->fetchAll();

foreach($listcountuser as $countuser) 
{
    echo 
    ' <span class="font-weight-bold">'.$countuser["numuser"].'</span> Usuario(s)';
}

$conex=null;


?>