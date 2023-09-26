<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
$query="SELECT COUNT(id_ticket) as numtic FROM tickets where statu='Sin Asignar';";
$listado=$conex->prepare($query);
$listado->execute();
$listcounttic=$listado->fetchAll();

foreach($listcounttic as $counttic) 
{
    echo 
    ' <span class="font-weight-bold">'.$counttic["numtic"].'</span> Sin Asignar';
}

$conex=null;


?>