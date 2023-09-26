<?php

$conex=Conexion::conectar();
$query="SELECT T.id_ticket, T.id_usuario, T.id_categoria, T.motivo, T.statu, T.fecha, C.tipo, U.usuario, D.departamento
FROM tickets T inner join categorias C on T.id_categoria=C.id_categoria
 inner join usuarios U on T.id_usuario=U.id_usuario inner join departamentos D on D.id_departamento=U.id_departamento;";
$listado=$conex->prepare($query);
$listado->execute();
$listtic=$listado->fetchAll();

foreach($listtic as $tic) 
{
    echo 
    '
    <tr>
    <td>'.$tic["usuario"].'</td>
    <td>'.$tic["departamento"].'</td>
    <td>'.$tic["tipo"].'</td>
    <td>'.$tic["motivo"].'</td>
    <td>'.$tic["fecha"].'</td>
    <td>'.$tic["statu"].'</td>
    ';
}

$conex=null;


?>