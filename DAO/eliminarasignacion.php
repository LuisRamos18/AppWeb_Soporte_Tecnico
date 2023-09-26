<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtAsi']))
{
    $idasi=$_POST['txtAsi'];
    $udp="UPDATE equipos e inner join asignacion_usuario a on e.id_equipo=a.id_equipo set estado='V' where id_asignacion=$idasi;";
    $cmd="DELETE asignacion_usuario from asignacion_usuario where id_asignacion=$idasi;";
    


    $data=$conn->prepare($udp);
    $lis=$data->execute();

    if($lis==true)
    {
        $lis1=$conn->prepare($cmd);
        $bool1=$lis1->execute();

        if($bool1==true)
        {
           echo 1;

        }
        else{
            echo 0;
        }

    }else
    {
        echo 2;
    }


}
else
{
    echo 3;
}
?>