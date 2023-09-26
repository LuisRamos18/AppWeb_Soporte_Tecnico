<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
$query="SELECT D.id_departamento,D.departamento, D.seco, B.lugar, 
(select count(id_usuario)as numuse from usuarios U where U.id_departamento=D.id_departamento )as 'user',
(select count(id_ticket)as numtic from tickets T inner join usuarios U on T.id_usuario=U.id_usuario 
where D.id_departamento=U.id_departamento)as 'tickets' FROM departamentos D inner join ubicaciones B on D.id_ubicacion=B.id_ubicacion;";
$listado=$conex->prepare($query);
$listado->execute();
$listdep=$listado->fetchAll();

foreach($listdep as $dep) 
{
    echo 
    '
    <tr>
    <td>'.$dep["id_departamento"].'</td>
    <td>'.$dep["departamento"].'</td>
    <td>'.$dep["lugar"].'</td>
    <td>'.$dep["seco"].'</td>
    <td>'.$dep["user"].'</td>
    <td>'.$dep["tickets"].'</td>
    </tr>
    ';
}

$conex=null;


?>