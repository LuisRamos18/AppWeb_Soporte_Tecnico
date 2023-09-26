<?php

include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['cmbdispositivo']) && !empty($_POST['cmbequipo']))

{
    $dispo=$_POST['cmbdispositivo'];
    $equipo=$_POST['cmbequipo'];
    $cmd="INSERT into relacion(id_padre,id_hijo) 
    values('$equipo','$dispo');";

    $upd="UPDATE equipos set estado='A' where id_equipo=$dispo;";


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