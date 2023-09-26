<?php
include '../DAO/conex.php';

$conex=Conexion::conectar();
    $query="SELECT * from ubicaciones";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione una Ubicación</option>';
    foreach($listes as $dep)
    {
        echo '<option value="'.$dep["id_ubicacion"].'">'.$dep["lugar"].'</option>';
    }




$conex=null;



?>