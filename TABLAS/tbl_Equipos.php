<?php

$conex=Conexion::conectar();
$query="SELECT E.id_equipo, E.nombre_equipo,E.id_marca,E.modelo, E.serie,E.fecha_ingreso, E.caracteristicas, M.id_marca, M.marca 
from equipos E inner join marcas M on E.id_marca=M.id_marca where tipo=1 and (estado='V' or estado='A');";
$listado=$conex->prepare($query);
$listado->execute();
$listequi=$listado->fetchAll();

foreach($listequi as $equi) 
{
    echo 
    '
    <tr>
    <td>'.$equi["nombre_equipo"].'</td>
    <td>'.$equi["marca"].'</td>
    <td>'.$equi["modelo"].'</td>
    <td>'.$equi["serie"].'</td>
    <td>'.$equi["fecha_ingreso"].'</td>
    ';
}

$conex=null;


?>