<?php

    $query="SELECT id_equipo,nombre_equipo, serie from equipos where tipo=1 and estado='V'";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione una Relacion</option>';
    foreach($listes as $relation)
    {
        echo '<option value="'.$relation["id_equipo"].'">'.$relation["nombre_equipo"].'
        '.$relation["serie"].'</option>';
    }

$conex=null;



?>