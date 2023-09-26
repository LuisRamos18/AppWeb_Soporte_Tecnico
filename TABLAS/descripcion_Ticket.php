<?php
$conex=Conexion::conectar();
$query="SELECT T.id_ticket, T.id_usuario, T.id_categoria, T.motivo, T.statu, T.fecha, T.hora, T.descripcion, T.id_tecnico, C.tipo, U.usuario 
FROM tickets T inner join categorias C on T.id_categoria=C.id_categoria inner join usuarios U on T.id_usuario=U.id_usuario 
where T.statu='Asignado';";
$listado=$conex->prepare($query);
$listado->execute();
$listticket=$listado->fetchAll();

foreach($listticket as $ticket) 
{
    echo 
    '
    <div>'.$ticket["id_ticket"].'</div>
    <div>'.$ticket["descripcion"].'</div>
    ';
}

$conex=null;


?>