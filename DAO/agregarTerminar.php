<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtPro']) && !empty($_POST['txtsolucion']))
{
    $ter=$_POST['txtPro'];
    $sol=$_POST['txtsolucion'];
    $estado="Resuelto";

    $cmd="INSERT into historial(id_ticket,solucion,estado) values ('$ter','$sol','$estado');";

    $upd="UPDATE tickets set statu='Resuelto' where id_ticket='$ter';";
    
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