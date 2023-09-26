<?php

$conex=Conexion::conectar();
$query="SELECT T.id_ticket,(select usuario from usuarios where id_usuario=T.id_usuario)as 'Solicita', 
T.motivo, T.statu,(select usuario from usuarios where id_usuario=T.id_tecnico) as 'Atiende',
 C.tipo,H.id_ticket, H.fecha, D.departamento
 FROM tickets T inner join categorias C on T.id_categoria=C.id_categoria 
 inner join usuarios U on T.id_usuario=U.id_usuario
 inner join departamentos D on 
U.id_departamento=D.id_departamento inner join historial H on H.id_ticket=T.id_ticket 
 where H.estado='En proceso' and T.statu='Proceso';";
$listado=$conex->prepare($query);
$listado->execute();
$listpro=$listado->fetchAll();

foreach($listpro as $pro) 
{
    echo 
    '
    <tr>
    <td>'.$pro["Solicita"].'</td>
    <td>'.$pro["departamento"].'</td>
    <td>'.$pro["tipo"].'</td>
    <td>'.$pro["motivo"].'</td>
    <td>'.$pro["fecha"].'</td>
    <td>'.$pro["statu"].'</td>
    <td>'.$pro["Atiende"].'</td>
    <td>
    <center><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalproceso" onclick="buscarpro('.$pro["id_ticket"].');"><i class="material-icons text-sm my-auto me-1"</i>search</button><center>
</td>
 
    ';
}

$conex=null;


?>