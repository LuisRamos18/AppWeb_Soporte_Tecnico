<?php

$conex=Conexion::conectar();
$query="SELECT DISTINCT D.id_detalles, D.institucion, D.descripcion, D.comunidades, T.nombre_tipo, M.nombre_municipio, D.direccion, D.telefono, D.horario, D.requisitos 
from Detalles D inner join tipos T on D.id_tipo=T.id_tipo inner join municipios M on D.id_municipio=M.id_municipio ORDER BY T.nombre_tipo;";
$listado=$conex->prepare($query);
$listado->execute();
$listrep=$listado->fetchAll();

foreach($listrep as $rep) 
{
    echo 
    '
    <tr>
    <td><h5>'.$rep["institucion"].'</td>
    <td><h5>'.$rep["nombre_tipo"].'</td>
    <td><h5>'.$rep["nombre_municipio"].'</td>
    <td><h5>'.$rep["comunidades"].'</td>
    <td><h5>'.$rep["direccion"].'</td>
    <td><h5>'.$rep["telefono"].'</td>
    <td><h5>'.$rep["horario"].'</td>
    <td><h5>'.$rep["descripcion"].'</td>
    <td><h5>'.$rep["requisitos"].'</td>';
}

$conex=null;


?>