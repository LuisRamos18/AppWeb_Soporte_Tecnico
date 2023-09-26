<?php

include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['cmbequipo']) && !empty($_POST['cmbidusuario']))

{
    $equi=$_POST['cmbequipo'];
    $user=$_POST['cmbidusuario'];
    $cmd="INSERT into asignacion_usuario(id_usuario,id_equipo) 
    values('$user','$equi');";

    $upd="UPDATE equipos set estado='A' where id_equipo=$equi;";


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