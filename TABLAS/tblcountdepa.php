<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_departamento) as num FROM departamentos where activo='SI';";
$listado=$conex->prepare($query);
$listado->execute();
$listcountdepa=$listado->fetchAll();

foreach($listcountdepa as $countdepa) 
{
    echo 
    ' <span class="font-weight-bold">'.$countdepa["num"].'</span> Departamento(s)';
}

$conex=null;


?>