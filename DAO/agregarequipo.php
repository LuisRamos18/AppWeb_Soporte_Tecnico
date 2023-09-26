<?php



include '../DAO/conex.php';
$conn=Conexion::conectar();
//ifternario para poder ingresar el checkbox como false o true//
$eset1=!empty($_POST['checkeset'])?1:0;
$sinology=!empty($_POST['checksynology'])?1:0;
$offic=!empty($_POST['checkoffice'])?1:0;  
$sbp1=!empty($_POST['checksbp'])?1:0;
$sap1=!empty($_POST['checksap'])?1:0;


if(!empty($_POST['txtequipo']) && !empty($_POST['txtmodelo']) && !empty($_POST['cmbgarantia']==1) && !empty($_POST['cmbmarca'])
&& !empty($_POST['txtserie']) && !empty($_POST['datelimite']) && !empty($_POST['cmbso'])&& !empty($_POST['txtip'])
&& !empty($_POST['txtcaracteristicas'])&& !empty($_POST['radio']))

{
    $disp=$_POST['txtequipo'];
    $model=$_POST['txtmodelo'];
    $garan=$_POST['cmbgarantia'];
    $marca=$_POST['cmbmarca'];
    $serial=$_POST['txtserie'];
    $date=$_POST['datelimite'];
    $so=$_POST['cmbso'];
    $ip=$_POST['txtip'];
    $eset=$eset1;
    $synology=$sinology;
    $office=$offic;
    $sbp=$sbp1;
    $sap=$sap1;
    $radio=$_POST['radio'];
    $carac=$_POST['txtcaracteristicas'];
    $cmd="INSERT into equipos(nombre_equipo,id_marca,modelo,serie,caracteristicas,garantia,fecha_limite,so,ip,tipo,eset,synology,office,sbp,sap) 
    values('$disp','$marca','$model','$serial','$carac','$garan','$date','$so','$ip','$radio','$eset','$synology','$office','$sbp','$sap');";

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
    $disp=$_POST['txtequipo'];
    $model=$_POST['txtmodelo'];
    $garan=$_POST['cmbgarantia'];
    $marca=$_POST['cmbmarca'];
    $serial=$_POST['txtserie'];
    $date=$_POST['datelimite'];
    $so=$_POST['cmbso'];
    $ip=$_POST['txtip'];
    $eset=$eset1;
    $synology=$sinology;
    $office=$offic;
    $sbp=$sbp1;
    $sap=$sap1;
    $radio=$_POST['radio'];
    $carac=$_POST['txtcaracteristicas'];
    if(!empty($_POST['txtequipo']) && !empty($_POST['txtmodelo']) && !empty($_POST['cmbgarantia']==2) && !empty($_POST['cmbmarca'])
    && !empty($_POST['txtserie']) && !empty($_POST['txtcaracteristicas'])&& !empty($_POST['radio']))
    {
        $cmd="INSERT into equipos(nombre_equipo,id_marca,modelo,serie,caracteristicas,garantia,so,ip,tipo,eset,synology,office,sbp,sap) 
        values('$disp','$marca','$model','$serial','$carac',$garan,'$so','$ip','$radio','$eset','$synology','$office','$sbp','$sap');";

        $lis1=$conn->prepare($cmd);
        $bool1=$lis1->execute();

    }if($bool1==true)
    {
        echo 1;
    }else
    {
        echo 0;
    }
}
$conn=null;
?>