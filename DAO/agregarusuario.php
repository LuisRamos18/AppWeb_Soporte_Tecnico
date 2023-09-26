<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtusuario']) && !empty($_POST['txtnombre']) && !empty($_POST['txtapellido']) && !empty($_POST['cmbdepartamento'])
&& !empty($_POST['radio']))
{
    $user=$_POST['txtusuario'];
    $nom=$_POST['txtnombre'];
    $lastname=$_POST['txtapellido'];
    $dep=$_POST['cmbdepartamento'];
    $roll=$_POST['radio'];
    $cmd="INSERT into usuarios(usuario,id_departamento,nombre,apellido,roll) values('$user','$dep','$nom','$lastname','$roll');";

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