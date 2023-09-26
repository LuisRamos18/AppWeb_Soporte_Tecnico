<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_ticket) as numbas FROM tickets where id_categoria=2 and (statu='Sin asignar' or statu='Asignado' or statu='Proceso');";
$listado=$conex->prepare($query);
$listado->execute();
$listcounttic=$listado->fetchAll();

foreach($listcounttic as $counttic) 
{
    echo 
    ' <span class="font-weight-bold">'.$counttic["numbas"].'</span> Pendientes';
}

$conex=null;


?>