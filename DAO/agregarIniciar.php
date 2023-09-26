<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtDesc']))
{
    $ini=$_POST['txtDesc'];

    $estado="En proceso";
    $cmd="INSERT into historial(id_ticket,estado) values('$ini','$estado');";

    $upd="UPDATE tickets set statu='Proceso' where id_ticket=$ini;";
    
    $lis=$conn->prepare($cmd);
    $bool=$lis->execute();

    if($bool==true)
    {
        $lis1=$conn->prepare($upd);
        $bool1=$lis1->execute();

        if($bool1==true)
        {
            echo 1;
        }
        else{
            echo 0;
        }
    }
    else
    {
        echo 0;
    }
    $conn=null;
}
else
{
    echo 0;
}
$conn=null;
?>


