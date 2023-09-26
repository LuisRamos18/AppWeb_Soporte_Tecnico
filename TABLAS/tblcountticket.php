<?php
if($_SESSION['Roll']==1){
    $conex=Conexion::conectar();
    $query="SELECT COUNT(id_ticket) as numticket FROM tickets";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listcountticket=$listado->fetchAll();
    
    foreach($listcountticket as $countticket) 
    {
        echo 
        ' <span class="font-weight-bold">'.$countticket["numticket"].'</span> Ticket(s)';
    }
    
    $conex=null;
}
else{
    $USER= $_SESSION['idUsu'];
    $conex=Conexion::conectar();
    $query="SELECT COUNT(id_ticket) as numticket FROM tickets where id_usuario=$USER";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listcountticket=$listado->fetchAll();
    
    foreach($listcountticket as $countticket) 
    {
        echo 
        ' <span class="font-weight-bold">'.$countticket["numticket"].'</span> Ticket(s)';
    }
    
    $conex=null;

}




?>