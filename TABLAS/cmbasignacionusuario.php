<?php


$conex=Conexion::conectar();
    $query="SELECT * from usuarios where activo='SI'";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione un Usuario</option>';
    foreach($listes as $use)
    {
        echo '<option value="'.$use["id_usuario"].'">'.$use["usuario"].'</option>';
    }

$conex=null;



?>