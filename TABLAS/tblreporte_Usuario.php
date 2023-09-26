<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
$query="SELECT U.id_usuario,U.usuario, U.nombre, U.apellido, C.correo, D.departamento, E.nombre_equipo, E.serie,
(SELECT COUNT(T.id_ticket)as numb from tickets T where U.id_usuario=T.id_usuario)as numb from usuarios U 
inner JOIN claves C on U.id_usuario=C.id_usuario inner join departamentos D on U.id_departamento=D.id_departamento 
inner join asignacion_usuario A on A.id_usuario=U.id_usuario inner join equipos E on A.id_equipo=E.id_equipo and
E.estado='A';";
$listado=$conex->prepare($query);
$listado->execute();
$listrep=$listado->fetchAll();

foreach($listrep as $rep) 
{
    echo 
    '
    <tr>
    <td>'.$rep["id_usuario"].'</td>
    <td>'.$rep["usuario"].'</td>
    <td>'.$rep["nombre"].' '.$rep["apellido"].'</td>
    <td>'.$rep["correo"].'</td>
    <td>'.$rep["departamento"].'</td>
    <td>'.$rep["nombre_equipo"].'</td>
    <td>'.$rep["serie"].'</td>
    <td>'.$rep["numb"].'</td>
    ';
}

$conex=null;


?>