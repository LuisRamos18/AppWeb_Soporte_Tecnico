<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscar()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']) && !empty($_POST['institucion']))
         {
            $MUN=$_POST['id'];
            $INS=$_POST['institucion'];
            $query="SELECT D.id_detalles, D.institucion,T.nombre_tipo, T.imagen_tipo, D.direccion, D.telefono, D.horario, D.descripcion, D.comunidades, D.requisitos
            FROM detalles D inner join tipos T on T.id_tipo=D.id_tipo WHERE D.id_municipio=$MUN and D.institucion='$INS'";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtIm"]=$usuario[0]['imagen_tipo'];
                $data["txtDe"]=$usuario[0]['id_detalles'];
                $data["txtIn"]=$usuario[0]['institucion'];
                $data["txtNo"]=$usuario[0]['nombre_tipo'];
            
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
         case 'buscar':
            $a->buscar();
         break;

         
     }

 }
?>