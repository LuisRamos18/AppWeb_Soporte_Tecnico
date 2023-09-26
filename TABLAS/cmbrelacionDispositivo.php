<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
    $query="SELECT id_equipo, nombre_equipo,serie, tipo from equipos where tipo=2 and estado='V';";
    $listado=$conex->prepare($query);
    $listado->execute();
    $listes=$listado->fetchAll();
    $opciones='<option value="0">Seleccione un Equipo</option>';
    foreach($listes as $equi)
    {
        echo '<option value="'.$equi["id_equipo"].'">'.$equi["nombre_equipo"].'--'.$equi["serie"].'</option>';
    }




$conex=null;



?>