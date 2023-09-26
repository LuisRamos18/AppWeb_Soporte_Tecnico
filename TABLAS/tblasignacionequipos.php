<?php

if($_SESSION['Roll']==1){
$conex=Conexion::conectar();
$query="SELECT A.id_asignacion,A.id_usuario,A.id_equipo,U.id_usuario, U.usuario,E.id_equipo, E.nombre_equipo, E.serie 
from asignacion_usuario A inner join usuarios U on A.id_usuario=U.id_usuario inner join equipos E on A.id_equipo = E.id_equipo where E.estado='A'";
$listado=$conex->prepare($query);
$listado->execute();
$listasignacion=$listado->fetchAll();

foreach($listasignacion as $asignacion) 
{
    echo 
    '
    <tr>
    <td>'.$asignacion["usuario"].'</td>
    <td>'.$asignacion["nombre_equipo"].'</td>
    <td>'.$asignacion["serie"].'</td>
    <td> 
    
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminarasi" onclick="abrirasi('.$asignacion["id_asignacion"].')"><i class="material-icons text-sm my-auto me-1">backspace</i></button>
    </tr>
    ';
}

$conex=null;}

else{
$USER= $_SESSION['idUsu'];    
$conex=Conexion::conectar();
$query="SELECT A.id_asignacion,A.id_usuario,A.id_equipo,U.id_usuario, U.usuario,E.id_equipo, E.nombre_equipo, E.modelo, E.serie, M.marca
from asignacion_usuario A inner join usuarios U on A.id_usuario=U.id_usuario inner join equipos E on A.id_equipo = E.id_equipo
inner join marcas M on M.id_marca = E.id_marca where E.estado='A' and A.id_usuario=$USER";
$listado=$conex->prepare($query);
$listado->execute();
$listasignacion=$listado->fetchAll();

foreach($listasignacion as $asignacion) 
{
    echo 
    '
    <tr>
    <td>'.$asignacion["nombre_equipo"].'</td>
    <td>'.$asignacion["marca"].'</td>
    <td>'.$asignacion["modelo"].'</td>
    <td>'.$asignacion["serie"].'</td>
    <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalperiferico" onclick="periferico('.$asignacion["id_asignacion"].')"><i class="material-icons text-sm my-auto me-1">input</i></button></td>
    </tr>
    ';
}

}


?>