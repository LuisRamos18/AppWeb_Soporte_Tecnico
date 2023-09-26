<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtRel']))
{
    $idequi=$_POST['txtRel'];
    $udp="UPDATE equipos inner join relacion on id_hijo=id_equipo set estado='V' where id_asignar=$idequi;";
    $cmd="DELETE relacion from relacion where id_asignar=$idequi;";
    


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