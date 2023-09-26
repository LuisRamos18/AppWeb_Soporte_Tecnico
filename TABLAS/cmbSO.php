<?php


$conex=Conexion::conectar();
    $query="SELECT * from so";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione una Sistema Operativo</option>';
    foreach($listes as $dep)
    {
        echo '<option value="'.$dep["id_so"].'">'.$dep["sistema"].'</option>';
    }




$conex=null;



?>