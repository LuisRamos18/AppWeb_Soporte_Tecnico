<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtde']) && !empty($_POST['numseco']) && !empty($_POST['cmbubicacion']) && !empty($_POST['txtdepartamento']))
{
    $iddepa=$_POST['txtde'];
    $ceco=$_POST['numseco'];
    $ubi=$_POST['cmbubicacion'];
    $depa=$_POST['txtdepartamento'];
    $cmd="UPDATE departamentos set seco=$ceco, id_ubicacion=$ubi, departamento='$depa' where id_departamento=$iddepa;";
    $data=$conn->prepare($cmd);
    $lis=$data->execute();
    if($lis==true)
    {
        echo 1;

    }else
    {
        echo 0;
    }


}
else
{
    echo 0;
}
?>