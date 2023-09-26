<?php


$conex=Conexion::conectar();
    $query="SELECT * from departamentos;";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione un Departamento</option>';
    foreach($listes as $dep)
    {
        echo '<option value="'.$dep["id_departamento"].'">'.$dep["departamento"].'</option>';
    }




$conex=null;



?>