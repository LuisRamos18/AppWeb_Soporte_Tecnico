<?php

$conex=Conexion::conectar();
$query="SELECT E.id_equipo, E.nombre_equipo,E.id_marca,E.modelo, E.serie,E.fecha_ingreso,
(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo'), M.id_marca, M.marca 
from equipos E inner join marcas M on E.id_marca=M.id_marca where E.estado='V' or E.estado='A';";
$listado=$conex->prepare($query);
$listado->execute();
$listequi=$listado->fetchAll();

foreach($listequi as $equi) 
{
    echo 
    '
    <tr>
    <td>'.$equi["nombre_equipo"].'</td>
    <td>'.$equi["(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo')"].'</td>
    <td>'.$equi["marca"].'</td>
    <td>'.$equi["modelo"].'</td>
    <td>'.$equi["serie"].'</td>
    <td>'.$equi["fecha_ingreso"].'</td>
    </tr>
    ';
}

$conex=null;


?>