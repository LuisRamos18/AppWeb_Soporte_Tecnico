<?php
$conex=Conexion::conectar();
$query="SELECT U.id_usuario,U.usuario, U.nombre, U.apellido, U.id_departamento,D.departamento 
from usuarios U inner join departamentos D on U.id_departamento=D.id_departamento where U.activo='SI';";
$listado=$conex->prepare($query);
$listado->execute();
$listusers=$listado->fetchAll();

foreach($listusers as $user) 
{
    echo 
    '
    <tr>
    <td>'.$user["usuario"].'</td>
    <td>'.$user["nombre"].' '.$user["apellido"].'</td>
    <td>'.$user["departamento"].'</td>
    <td> 
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalmodificaruse" onclick="buscaruser('.$user["id_usuario"].')"><i class="material-icons text-sm my-auto me-1"><i class="material-icons text-sm my-auto me-1">input</i></button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminaruse" onclick="abriruse('.$user["id_usuario"].')"><i class="material-icons text-sm my-auto me-1">backspace</i></button>
    </tr>
    ';
}

$conex=null;


?>