<?php
include '../DAO/conex.php';
$conn=Conexion::conectar();

//ifternario para poder ingresar el checkbox como false o true//
$eset1=!empty($_POST['checkeset'])?1:0;
$sinology=!empty($_POST['checksynology'])?1:0;
$offic=!empty($_POST['checkoffice'])?1:0;  
$sbp1=!empty($_POST['checksbp'])?1:0;
$sap1=!empty($_POST['checksap'])?1:0;

if(!empty($_POST['lblDesc']) && !empty($_POST['txtequipo'])&& !empty($_POST['txtmodelo']) && !empty($_POST['cmbgarantia']) && !empty($_POST['cmbso'])
&& !empty($_POST['cmbmarca']) && !empty($_POST['txtserie']) && !empty($_POST['txtip'])&& !empty($_POST['radio'])&& !empty($_POST['txtcaracteristicas']))
{
    $eset=$eset1;
    $synology=$sinology;
    $office=$offic;
    $sbp=$sbp1;
    $sap=$sap1;
    $idequipo=$_POST['lblDesc'];
    $equipo=$_POST['txtequipo'];
    $modelo=$_POST['txtmodelo'];
    $garantia=$_POST['cmbgarantia'];
    $so=$_POST['cmbso'];
    $marca=$_POST['cmbmarca'];
    $serie=$_POST['txtserie'];
    $ip=$_POST['txtip'];
    $radio=$_POST['radio'];
    $cara=$_POST['txtcaracteristicas'];
    $cmd="UPDATE equipos set nombre_equipo='$equipo', serie='$serie', modelo='$modelo',caracteristicas='$cara', id_marca=$marca, so=$so, ip='$ip', garantia=$garantia, office=$office,sap= $sap,sbp=$sbp,synology=$synology, eset=$eset,tipo=$radio where id_equipo=$idequipo;";
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