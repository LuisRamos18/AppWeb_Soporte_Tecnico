<?php

$conex=Conexion::conectar();
$query="SELECT D.id_departamento, D.departamento,D.seco,D.id_ubicacion, U.id_ubicacion, U.lugar 
from departamentos D inner join ubicaciones U on D.id_ubicacion=U.id_ubicacion where activo='SI';";
$listado=$conex->prepare($query);
$listado->execute();
$listdepa=$listado->fetchAll();

foreach($listdepa as $depa) 
{
    echo 
    '
    <tr>
    <td>'.$depa["seco"].'</td>
    <td>'.$depa["departamento"].'</td>
    <td>'.$depa["lugar"].'</td>
    <td> 
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalmodificar" onclick="buscarid('.$depa["id_departamento"].')"><i class="material-icons text-sm my-auto me-1">input</i></button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminar" onclick="abrir('.$depa["id_departamento"].')"><i class="material-icons text-sm my-auto me-1">backspace</i></button>
    </td>
    </tr>
    ';
}

$conex=null;


?>