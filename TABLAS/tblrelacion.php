<?php
$conex=Conexion::conectar();
$query="SELECT R.id_asignar,(select nombre_equipo from equipos where id_equipo=R.id_padre) as 'Equipo', 
(select nombre_equipo from equipos where id_equipo=R.id_hijo) as 'Periferico', 
(select serie from equipos where id_equipo=R.id_padre) as 'SerieE', 
(select serie from equipos where id_equipo=R.id_hijo) as 'SerieP' 
FROM relacion R inner join equipos E on R.id_padre=E.id_equipo;";
$listado=$conex->prepare($query);
$listado->execute();
$listrelacion=$listado->fetchAll();

foreach($listrelacion as $relacion) 
{
    echo 
    '
    <tr>
    <td>'.$relacion["Equipo"].'</td>
    <td>'.$relacion["SerieE"].'</td>
    <td>'.$relacion["Periferico"].'</td>
    <td>'.$relacion["SerieP"].'</td>
    <td> 
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminarRel" onclick="abrirRel('.$relacion["id_asignar"].')"><i class="material-icons text-sm my-auto me-1">backspace</i></button>
    </tr>
    ';
}

$conex=null;


?>