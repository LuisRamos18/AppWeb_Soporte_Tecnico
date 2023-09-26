<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscarsol()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $idtick=$_POST['id'];
            $query="SELECT id_ticket,solucion from historial where id_ticket=$idtick and estado='Resuelto';";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtDes"]=$usuario[0]['solucion'];
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
         case 'buscarsol':
            $a->buscarsol();
         break;

         
     }

 }
?>