<?php

$conex=Conexion::conectar();
$query="SELECT COUNT(id_equipo) as numequi, tipo FROM equipos where garantia=1;";
$listado=$conex->prepare($query);
$listado->execute();
$listcountequi=$listado->fetchAll();

foreach($listcountequi as $countequi) 
{
    echo 
    ' <span class="font-weight-bold">'.$countequi["numequi"].'</span> Garantia(s)';
}

$conex=null;


?>