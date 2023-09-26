<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtid']) && !empty($_POST['txtusuario']) && !empty($_POST['txtnombre']) && !empty($_POST['radioroll'])
&& !empty($_POST['cmbdepartamento']) && !empty($_POST['txtapellido']))
{
    $iduser=$_POST['txtid'];
    $user=$_POST['txtusuario'];
    $nombre=$_POST['txtnombre'];
    $roll=$_POST['radioroll'];
    $depa=$_POST['cmbdepartamento'];
    $apellido=$_POST['txtapellido'];
    $cmd="UPDATE usuarios set nombre=' $nombre', apellido='$apellido', id_departamento= $depa, roll=$roll, usuario='$user' where id_usuario=$iduser;";
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