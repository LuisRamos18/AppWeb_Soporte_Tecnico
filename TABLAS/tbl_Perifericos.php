<?php
if($_SESSION['Roll']==1){
$conex=Conexion::conectar();
$query="SELECT E.id_equipo, E.nombre_equipo,E.id_marca,E.modelo, E.serie,E.fecha_ingreso, E.caracteristicas, M.id_marca, M.marca 
from equipos E inner join marcas M on E.id_marca=M.id_marca where tipo=2 and (estado='V' or estado='A');";
$listado=$conex->prepare($query);
$listado->execute();
$listequi=$listado->fetchAll();

foreach($listequi as $equi) 
{
    echo 
    '
    <tr>
    <td>'.$equi["nombre_equipo"].'</td>
    <td>'.$equi["marca"].'</td>
    <td>'.$equi["modelo"].'</td>
    <td>'.$equi["serie"].'</td>
    <td>'.$equi["fecha_ingreso"].'</td>
    ';
}

$conex=null;}
else{
$USER= $_SESSION['idUsu'];
$conex=Conexion::conectar();
$query="SELECT U.usuario,E.id_equipo, E.nombre_equipo, E.modelo, E.serie, M.marca, (select nombre_equipo from equipos where id_equipo=R.id_hijo)as 'Periferico',
(select serie from equipos where id_equipo=R.id_hijo)as 'Serie P', (select id_marca from equipos where id_equipo=R.id_hijo)as 'Marca P' from 
asignacion_usuario A inner join usuarios U on A.id_usuario=U.id_usuario inner join equipos E on A.id_equipo = E.id_equipo 
inner join marcas M on M.id_marca = E.id_marca inner join relacion R on R.id_padre=E.id_equipo where E.estado='A' and A.id_usuario=$USER;";
$listado=$conex->prepare($query);
$listado->execute();
$listequi=$listado->fetchAll();

foreach($listequi as $equi) 
{
    echo 
    '
    <tr>
    <td>'.$equi["nombre_equipo"].'</td>
    <td>'.$equi["serie"].'</td>
    <td>'.$equi["Periferico"].'</td>
    <td>'.$equi["Serie P"].'</td>
    ';
}

}


?>