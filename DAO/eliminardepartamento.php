<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtDesc']))
{
    $iddepa=$_POST['txtDesc'];
    $cmd="UPDATE departamentos set activo='NO' where id_departamento=$iddepa;";
    $data=$conn->prepare($cmd);
    $lis=$data->execute();
    if($lis==true)
    {
        echo 1;

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