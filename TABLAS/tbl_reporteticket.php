<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
$query="SELECT T.id_ticket,(select usuario from usuarios where id_usuario=T.id_usuario)as 'Solicita', T.motivo,T.fecha,D.departamento, 
(select usuario from usuarios where id_usuario=T.id_tecnico) as 'Atiende', C.tipo, MAX(H.fecha)as 'Actual', 
(select case when T.statu='Sin asignar' then '1' when T.statu='Asignado' then '2' when T.statu='Proceso' then '3' when T.statu='Resuelto' then '4' end)as 'ESTADO',(SELECT TIMESTAMPDIFF(MINUTE, T.fecha, MAX(H.fecha)) AS 'diferencia')as 'DIF MIN',
(SELECT TIMESTAMPDIFF(HOUR, T.fecha, MAX(H.fecha)) AS 'diferencia')as 'DIF HOR',(SELECT TIMESTAMPDIFF(DAY, T.fecha, MAX(H.fecha)) AS 'diferencia')as 'DIF DIA',(select max(T.statu) from historial where id_ticket=t.id_ticket GROUP by id_ticket )as 'maximo'
 FROM tickets T inner join categorias C on T.id_categoria=C.id_categoria inner join usuarios U on T.id_usuario=U.id_usuario inner join departamentos D on D.id_departamento=U.id_departamento inner join historial H on T.id_ticket=H.id_ticket group by T.id_ticket order by T.id_ticket;;";
$listado=$conex->prepare($query);
$listado->execute();
$listrep=$listado->fetchAll();

foreach($listrep as $rep) 
{
    echo 
    '
    <tr>
    <td>'.$rep["id_ticket"].'</td>
    <td>'.$rep["Solicita"].'</td>
    <td>'.$rep["departamento"].'</td>
    <td>'.$rep["tipo"].'</td>
    <td>'.$rep["motivo"].'</td>
    <td>'.$rep["fecha"].'</td>
    <td>'.$rep["Atiende"].'</td>
    <td>'.$rep["Actual"].'</td>
    <td>'.$rep["DIF MIN"].'</td>
    <td>'.$rep["DIF HOR"].'</td>
    <td>'.$rep["DIF DIA"].'</td>
    <td>'.$rep["maximo"].'</td>
    ';
}

$conex=null;


?>




