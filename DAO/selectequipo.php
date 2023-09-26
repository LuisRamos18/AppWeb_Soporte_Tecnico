<?php
include '../DAO/conex.php';
 class Tickets
 {

     public function buscarequipo()
     {
         $conex=Conexion::conectar();
         if(!empty($_POST['id']))
         {
            $idequipo=$_POST['id'];
            $query="SELECT id_equipo, nombre_equipo, modelo, serie, id_marca, so, garantia, fecha_limite, ip, tipo, caracteristicas
            from equipos where id_equipo=$idequipo;";
            $listado=$conex->query($query);
            while($usuario=$listado->fetchAll())
            {

                $data["txtIde"]=$usuario[0]['id_equipo'];
                $data["txtEq"]=$usuario[0]['nombre_equipo'];
                $data["txtMo"]=$usuario[0]['modelo'];
                $data["txtSe"]=$usuario[0]['serie'];
                $data["txtMa"]=$usuario[0]['id_marca'];
                $data["txtGa"]=$usuario[0]['garantia'];
                $data["txtFe"]=$usuario[0]['fecha_limite'];
                $data["txtSi"]=$usuario[0]['so'];
                $data["txtIp"]=$usuario[0]['ip'];
                $data["txtTi"]=$usuario[0]['tipo'];
                $data["txtCa"]=$usuario[0]['caracteristicas'];
               
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
         case 'buscarequipo':
            $a->buscarequipo();
         break;

         
     }

 }
?>