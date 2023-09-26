<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscarpro()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $idpro=$_POST['id'];
            $query="SELECT id_ticket,descripcion from tickets where id_ticket=$idpro;";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtDes"]=$usuario[0]['descripcion'];
                $data["txtPro"]=$usuario[0]['id_ticket'];
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
         case 'buscarpro':
            $a->buscarpro();
         break;

         
     }

 }
?>