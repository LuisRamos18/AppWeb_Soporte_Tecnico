<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['txtUse']))
{
    $iduse=$_POST['txtUse'];
    $cmd="UPDATE usuarios set activo='NO' where id_usuario=$iduse;";
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