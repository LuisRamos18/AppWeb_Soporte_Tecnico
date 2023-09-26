<?php
if($_SESSION['Roll']==1){
$conex=Conexion::conectar();
$query="SELECT T.id_ticket,T.ubicacion,T.id_usuario, T.statu, T.id_categoria, U.id_usuario, U.usuario, C.id_categoria, C.tipo 
from tickets T inner join usuarios U on T.id_usuario=U.id_usuario inner join categorias C on T.id_categoria=C.id_categoria;;";
$listado=$conex->prepare($query);
$listado->execute();
$listticket=$listado->fetchAll();

foreach($listticket as $ticket) 
{
    echo 
    '
    <tr>
    <td>'.$ticket["id_ticket"].'</td>
    <td>'.$ticket["usuario"].'</td>
    <td>'.$ticket["tipo"].'</td>
    <td>'.$ticket["statu"].'</td>
    <td> 
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalticket" onclick="buscarticket('.$ticket["id_ticket"].')"><i class="material-icons text-sm my-auto me-1">info</i></button>
    </tr>
    ';
}

$conex=null;}
else{
$USER= $_SESSION['idUsu'];
$conex=Conexion::conectar();
$query="SELECT T.id_ticket,T.ubicacion,T.id_usuario, T.statu, T.id_categoria, U.id_usuario, C.id_categoria, C.tipo 
from tickets T inner join usuarios U on T.id_usuario=U.id_usuario inner join categorias C on T.id_categoria=C.id_categoria where U.id_usuario=$USER;;";
$listado=$conex->prepare($query);
$listado->execute();
$listticket=$listado->fetchAll();

foreach($listticket as $ticket) 
{
    echo 
    '
    <tr>
    <td>'.$ticket["id_ticket"].'</td>
    <td>'.$ticket["tipo"].'</td>
    <td>'.$ticket["statu"].'</td>
    </tr>
    ';
}

$conex=null;}

?>