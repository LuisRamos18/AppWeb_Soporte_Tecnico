<?php

$conex=Conexion::conectar();
$query="SELECT E.id_equipo, E.nombre_equipo,E.id_marca,E.modelo, E.serie,E.fecha_ingreso,
(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo'), M.id_marca, M.marca 
from equipos E inner join marcas M on E.id_marca=M.id_marca where estado='V'";
$listado=$conex->prepare($query);
$listado->execute();
$listsin=$listado->fetchAll();

foreach($listsin as $sin) 
{
    echo 
    '
    <tr>
    <td>'.$sin["nombre_equipo"].'</td>
    <td>'.$sin["(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo')"].'</td>
    <td>'.$sin["marca"].'</td>
    <td>'.$sin["modelo"].'</td>
    <td>'.$sin["serie"].'</td>
    <td>'.$sin["fecha_ingreso"].'</td>
    ';
}

$conex=null;


?>