<?php

$conex=Conexion::conectar();
$query="SELECT E.id_equipo,E.nombre_equipo,E.serie,E.ip,S.sistema,(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo')as 'Tipo'
 from equipos E inner join so S on S.id_so=E.so where estado='V' or estado='A';";
$listado=$conex->prepare($query);
$listado->execute();
$listequi=$listado->fetchAll();

foreach($listequi as $equi) 
{
    echo 
    '
    <tr>
    <td>'.$equi["nombre_equipo"].'</td>
    <td>'.$equi["Tipo"].'</td>
    <td>'.$equi["serie"].'</td>
    <td>'.$equi["ip"].'</td>
    <td>'.$equi["sistema"].'</td>
    <td> 
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalmodificar" onclick="buscarequipo('.$equi["id_equipo"].')"><i class="material-icons text-sm my-auto me-1">input</i></button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminarequi" onclick="abrirequi('.$equi["id_equipo"].')"><i class="material-icons text-sm my-auto me-1">backspace</i></button>
    </tr>
    ';
}

$conex=null;


?>