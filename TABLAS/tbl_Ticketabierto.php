<?php

$conex=Conexion::conectar();
$query="SELECT T.id_ticket,(select usuario from usuarios where id_usuario=T.id_usuario)as 'Solicita', 
T.motivo, T.statu, T.fecha, C.tipo, D.departamento
FROM tickets T inner join categorias C on T.id_categoria=C.id_categoria inner join usuarios U on 
T.id_usuario=U.id_usuario inner join departamentos D on 
U.id_departamento=D.id_departamento
where T.statu='Sin asignar';";
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
    <td><center><button type="button"  class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalasignar" onclick="buscarasig('.$tic["id_ticket"].');"><i class="material-icons text-sm my-auto me-1"</i>checklist</button><center></td>
    
 
    ';
}

$conex=null;


?>