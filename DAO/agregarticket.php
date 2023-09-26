<?php

include '../DAO/conex.php';
$conn=Conexion::conectar();

if(!empty($_POST['cmbusuario']) && !empty($_POST['txtubicacion'])
&& !empty($_POST['txtmotivo']) && !empty($_POST['txtdescripcion']))
{
    $use=$_POST['cmbusuario'];
    $cate=$_POST['cmbcategoria'];
    $ubi=$_POST['txtubicacion'];
    $motiv=$_POST['txtmotivo'];
    $descri=$_POST['txtdescripcion'];
    $statu="";
    if(!empty($_POST['cmbcategoria']<=2))
    {

        $statu="Asignado";
        $tecnico=1;
        $cmd="INSERT into tickets(id_usuario,ubicacion,id_categoria,motivo,descripcion,statu,id_tecnico) 
        values('$use','$ubi','$cate','$motiv','$descri','$statu','$tecnico');";

        $sel="SELECT max(id_ticket) as id_ticket from tickets where id_usuario='$use' and ubicacion='$ubi' and id_categoria='$cate'
        and motivo='$motiv' and descripcion='$descri' and statu='$statu' and id_tecnico='$tecnico';";

        $estado="Creado";
        $estado2="Asignado";
        

        $lis=$conn->prepare($cmd);
        $bool=$lis->execute();

        if($bool==true)
        {

            $listado=$conn->query($sel);

            while($ticket=$listado->fetchAll())
            {

                $data["txtid"]=$ticket[0]['id_ticket'];

            }        
            $idtik=$data["txtid"];
            $cmd2="INSERT into historial(id_ticket,estado)values($idtik,'$estado');";
            $ins=$conn->prepare($cmd2);
            $bool2=$ins->execute();

            if($bool2==true)
            {
                $listado=$conn->query($sel);

            while($ticket=$listado->fetchAll())
            {

                $data["txtid"]=$ticket[0]['id_ticket'];

            }        
            $idtik=$data["txtid"];
            $cmd2="INSERT into historial(id_ticket,estado)values($idtik,'$estado2');";
            $ins=$conn->prepare($cmd2);
            $bool3=$ins->execute();
               
            }if($bool3==true)
            {
                 $data["txtid"] ;

                echo json_encode($data);
            }
            else{ echo 0;}
            
        }
    }else
    {
        if(!empty($_POST['cmbcategoria']==3))
        {
        
            $statu="Asignado";
            $tecnico=2;
            $cmd="INSERT into tickets(id_usuario,ubicacion,id_categoria,motivo,descripcion,statu,id_tecnico) 
            values('$use','$ubi','$cate','$motiv','$descri','$statu','$tecnico');";
    
            $sel="SELECT max(id_ticket) as id_ticket from tickets where id_usuario='$use' and ubicacion='$ubi' and id_categoria='$cate'
            and motivo='$motiv' and descripcion='$descri' and statu='$statu' and id_tecnico='$tecnico';";
    
            $estado="Creado";
            $estado2="Asignado";
            
    
            $lis=$conn->prepare($cmd);
            $bool=$lis->execute();
    
            if($bool==true)
            {
    
                $listado=$conn->query($sel);
    
                while($ticket=$listado->fetchAll())
                {
    
                    $data["txtid"]=$ticket[0]['id_ticket'];
    
                }        
                $idtik=$data["txtid"];
                $cmd2="INSERT into historial(id_ticket,estado)values($idtik,'$estado');";
                $ins=$conn->prepare($cmd2);
                $bool2=$ins->execute();
    
                if($bool2==true)
                {
                    $listado=$conn->query($sel);
    
                while($ticket=$listado->fetchAll())
                {
    
                    $data["txtid"]=$ticket[0]['id_ticket'];
    
                }        
                $idtik=$data["txtid"];
                $cmd2="INSERT into historial(id_ticket,estado)values($idtik,'$estado2');";
                $ins=$conn->prepare($cmd2);
                $bool3=$ins->execute();
                   
                }if($bool3==true)
                {
                     $data["txtid"];
                   echo json_encode($data);
                }
                else
                {
                    echo 0;
                }
            }   
        }else
        {
            $statu="Sin asignar";
            $cmd="INSERT into tickets(id_usuario,ubicacion,id_categoria,motivo,descripcion,statu) 
            values('$use','$ubi','$cate','$motiv','$descri','$statu');";
    
            $sel="SELECT max(id_ticket) as id_ticket from tickets where id_usuario='$use' and ubicacion='$ubi' and id_categoria='$cate'
            and motivo='$motiv' and descripcion='$descri' and statu='$statu';";
    
            $estado="Creado";
            
    
            $lis=$conn->prepare($cmd);
            $bool=$lis->execute();
    
            if($bool==true)
            {
                $listado=$conn->query($sel);
    
                while($ticket=$listado->fetchAll())
                {
    
                    $data["txtid"]=$ticket[0]['id_ticket'];
    
                }        
                $idtik=$data["txtid"];
                $cmd2="INSERT into historial(id_ticket,estado)values($idtik,'$estado');";
                $ins=$conn->prepare($cmd2);
                $bool2=$ins->execute();
            }if($bool2==true)
            {

                $data["txtid"];

               echo json_encode($data);
            }else
            {
                echo 0;
            }
    


        }   
    }
        
}  
else
{
    echo 0;
}

$conn=null;
?>