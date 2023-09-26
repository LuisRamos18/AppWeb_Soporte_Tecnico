<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
$query="SELECT id_tipo, nombre_tipo FROM tipos;";
$listado=$conex->prepare($query);
$listado->execute();
$listservicios=$listado->fetchAll();

foreach($listservicios as $servicio)
{
    echo
    '<h2><a href="../GUI/principal.php?var='.$servicio["id_tipo"].' & nom='.$servicio["nombre_tipo"].' " class="nav-item nav-link">'.$servicio["nombre_tipo"].'</a>';
    
    
}

$conex=null;


?>