<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function enviar()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $INS=$_POST['id'];
            $query="SELECT D.id_detalles, D.institucion,T.nombre_tipo, D.imagen, D.direccion, D.telefono, D.horario, D.descripcion, D.comunidades, D.requisitos
            FROM detalles D inner join tipos T on T.id_tipo=D.id_tipo WHERE D.id_detalles=$INS;";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtCo"]=$usuario[0]['comunidades'];
                $data["txtDi"]=$usuario[0]['direccion'];
                $data["txtTe"]=$usuario[0]['telefono'];
                $data["txtHo"]=$usuario[0]['horario'];
                $data["txtDe"]=$usuario[0]['descripcion'];
                $data["txtRe"]=$usuario[0]['requisitos'];
                $data["txtIm"]=$usuario[0]['imagen'];
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
         case 'enviar':
            $a->enviar();
         break;

         
     }

 }
?>