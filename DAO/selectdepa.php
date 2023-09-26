<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscarid()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $iddepa=$_POST['id'];
            $query="SELECT id_departamento,departamento,seco,id_ubicacion from departamentos where id_departamento=$iddepa;";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtDes"]=$usuario[0]['departamento'];
                $data["txtCe"]=$usuario[0]['seco'];
                $data["txtU"]=$usuario[0]['id_ubicacion'];
                $data["txtId"]=$usuario[0]['id_departamento'];
            }
        
            echo json_encode($data);
            
         }
         $conex=null;
         
     }


 }
 $a=new Tickets();

 if(!empty($_POST['txtmetodo']))
 {
     $funcion=$_POST['txtmetodo'];
     switch($funcion)
     {
         case 'buscarid':
            $a->buscarid();
         break;

         
     }

 }
?>