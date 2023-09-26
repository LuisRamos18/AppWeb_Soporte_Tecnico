<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtdepartamento']) && !empty($_POST['cmbubicacion']) && !empty($_POST['numseco']))
{
    $dep=$_POST['txtdepartamento'];
    $ubi=$_POST['cmbubicacion'];
    $sec=$_POST['numseco'];
    $cmd="INSERT into departamentos(departamento,seco,id_ubicacion) values('$dep','$sec','$ubi');";

    $lis=$conn->prepare($cmd);
    $bool=$lis->execute();

    if($bool==true)
    {
        echo 1;
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