<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscarticket()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $idtick=$_POST['id'];
            $query="SELECT id_ticket,descripcion from tickets where id_ticket=$idtick;";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtDes"]=$usuario[0]['descripcion'];
                $data["txtId"]=$usuario[0]['id_ticket'];
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
         case 'buscarticket':
            $a->buscarticket();
         break;

         
     }

 }
?>