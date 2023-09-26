<?php

$conex=Conexion::conectar();
$query="SELECT T.id_ticket,(select usuario from usuarios where id_usuario=T.id_usuario)as 'Solicita', 
T.motivo, T.statu,(select usuario from usuarios where id_usuario=T.id_tecnico) as 'Atiende',
 C.tipo,H.id_ticket, H.fecha,D.departamento
 FROM tickets T inner join categorias C on T.id_categoria=C.id_categoria 
 inner join usuarios U on T.id_usuario=U.id_usuario
 inner join departamentos D on 
U.id_departamento=D.id_departamento inner join historial H on H.id_ticket=T.id_ticket 
 where H.estado='Asignado' and T.statu='Asignado';";
$listado=$conex->prepare($query);
$listado->execute();
$listtic=$listado->fetchAll();

foreach($listtic as $tic) 
{
    echo 
    '
    <tr>
    <td>'.$tic["Solicita"].'</td>
    <td>'.$tic["departamento"].'</td>
    <td>'.$tic["tipo"].'</td>
    <td>'.$tic["motivo"].'</td>
    <td>'.$tic["fecha"].'</td>
    <td>'.$tic["statu"].'</td>
    <td>'.$tic["Atiende"].'</td>
    <td><center><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="buscarconid('.$tic["id_ticket"].');"><i class="material-icons text-sm my-auto me-1"</i>info</button><center></td>
 
    ';
}

$conex=null;


?>