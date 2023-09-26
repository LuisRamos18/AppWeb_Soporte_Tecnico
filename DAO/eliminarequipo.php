<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtEqui']))
{
    $idequi=$_POST['txtEqui'];
    $udp="UPDATE equipos set estado='B',fecha_baja=CURRENT_DATE where id_equipo=$idequi;";
    $udp2="UPDATE equipos inner join relacion on id_hijo=id_equipo set estado='V' where id_padre=$idequi;";
    $cmd="DELETE relacion from relacion where id_padre=$idequi or id_hijo=$idequi;";
    


    $data=$conn->prepare($udp);
    $lis=$data->execute();

    if($lis==true)
    {
        $lis1=$conn->prepare($udp2);
        $bool1=$lis1->execute();

        if($bool1==true)
        {
           
        $lis2=$conn->prepare($cmd);
        $bool2=$lis2->execute();

        if($bool1==true)
        {
            echo 1;
        }
        else{
            echo 0;
        }
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