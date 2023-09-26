<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if( !empty($_POST['txtuser']) && !empty($_POST['txtfolio']))
{
    $USER=$_POST['txtuser'];
    $folio=$_POST['txtfolio'];
    $list="SELECT H.id_ticket,H.estado,H.fecha,T.id_usuario from historial H 
    inner join tickets T on H.id_ticket=T.id_ticket where H.id_ticket=$folio and T.id_usuario=$USER";
    $cmd=$conn->query($list);

    $numb="SELECT COUNT(H.id_ticket) as numticket from historial H inner join tickets T on H.id_ticket=T.id_ticket where H.id_ticket=$folio and T.id_usuario=$USER";
    $listado=$conn->prepare($numb);
    $listado->execute();
    $listcounttic=$listado->fetchAll();
    $valor=(int)$listcounttic[0]['numticket'];
    
    while($usuario=$cmd->fetchAll())
    {
        for($i=0; $i<$valor; $i++)
        {
        $data[$i]["txtId"]=$usuario[$i]['id_ticket'];
        $data[$i]["txtDes"]=$usuario[$i]['estado'];}
    
    }
    echo json_encode($data);
    echo $valor;

}
$conn=null;
?>