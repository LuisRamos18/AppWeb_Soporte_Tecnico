<?php


$conex=Conexion::conectar();
    $query="SELECT * from categorias";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione una Marca</option>';
    foreach($listes as $dep)
    {
        echo '<option value="'.$dep["id_categoria"].'">'.$dep["tipo"].'</option>';
    }




$conex=null;



?>