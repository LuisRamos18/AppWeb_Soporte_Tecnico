<?php
include '../DAO/encriptacion.php';
if(isset($_POST['btniniciar']))
{
    if(empty($_POST['txtcorreo']) || empty($_POST['txtclave']))
    {
        $message='<label>Todos los campos son requeridos</label>'; 
    }
    else
    {
        $obtenercon=$_POST['txtclave'];
        //$descontra=$encriptar($obtenercon);
        $query="SELECT U.id_usuario,U.usuario,U.nombre,U.apellido,U.roll,D.departamento,C.correo, C.clave FROM usuarios U inner join departamentos D on U.id_departamento=D.id_departamento inner join claves C on C.id_usuario=U.id_usuario where C.correo=:correo and C.clave=:clave";
        $cmd=$conex->prepare($query);
        
        
        $cmd->execute(
            array(
                'correo'=>$_POST['txtcorreo'],
                'clave'=>$obtenercon
            )
        );

        $count=$cmd->rowCount();
        if($count>0)
        {
                
                
                $lista=$cmd->fetchAll();
                foreach($lista as $lis)
                {
                    $_SESSION['idUsu']=$lis['id_usuario'];
                    $_SESSION['Usuario']=$lis['usuario'];
                    $_SESSION['Nombre']=$lis['nombre'];
                    $_SESSION['Apellido']=$lis['apellido'];
                    $_SESSION['Departamento']=$lis['departamento'];
                    $_SESSION['Correo']=$lis['correo'];
                    $_SESSION['Roll']=$lis['roll'];
                }  
        }
        else
        {
            $message='<label>Datos Incorrectos</label>'; 
            
        }

    }



}
if(!empty($_SESSION["idUsu"])>=3)
{
    //if($_SESSION["IdTipo"]>0 and $_SESSION["IdTipo"] !=1)
    //{
        header("location:../GUI/inicio.php");
    //}
}
?>