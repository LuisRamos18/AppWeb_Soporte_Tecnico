<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscaruser()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $iduser=$_POST['id'];
            $query="SELECT id_usuario, usuario, nombre, apellido, id_departamento,roll from usuarios where id_usuario=$iduser;";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtUs"]=$usuario[0]['usuario'];
                $data["txtNo"]=$usuario[0]['nombre'];
                $data["txtAp"]=$usuario[0]['apellido'];
                $data["txtDe"]=$usuario[0]['id_departamento'];
                $data["txtId"]=$usuario[0]['id_usuario'];
                $data["txtRo"]=$usuario[0]['roll'];
                
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
         case 'buscaruser':
            $a->buscaruser();
         break;

         
     }

 }
?>