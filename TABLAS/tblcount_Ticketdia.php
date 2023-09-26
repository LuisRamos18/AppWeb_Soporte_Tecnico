<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_ticket) as numtic FROM tickets";
$listado=$conex->prepare($query);
$listado->execute();
$listcounttic=$listado->fetchAll();

foreach($listcounttic as $counttic) 
{
    echo 
    ' <span class="font-weight-bold">'.$counttic["numtic"].'</span> Ticekt(s)';
}

$conex=null;


?>



