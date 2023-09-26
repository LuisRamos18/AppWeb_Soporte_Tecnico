<?php

$conex=Conexion::conectar();
$query="SELECT E.id_equipo, E.nombre_equipo,E.id_marca,E.modelo, E.serie, E.fecha_ingreso, E.fecha_limite, 
(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo')as 'Tipo', M.id_marca, M.marca, 
(SELECT TIMESTAMPDIFF(DAY,CURRENT_DATE, E.fecha_limite) AS 'diferencia')as 'DIF_DIA' from equipos E inner join marcas M on E.id_marca=M.id_marca where garantia='1'";
$listado=$conex->prepare($query);
$listado->execute();
$listsin=$listado->fetchAll();

foreach($listsin as $sin) 
{
    echo 
    '
    <tr>
    <td>'.$sin["nombre_equipo"].'</td>
    <td>'.$sin["Tipo"].'</td>
    <td>'.$sin["marca"].'</td>
    <td>'.$sin["modelo"].'</td>
    <td>'.$sin["serie"].'</td>
    <td>'.$sin["fecha_ingreso"].'</td>
    <td>'.$sin["fecha_limite"].'</td>
    <td>'.$sin["DIF_DIA"].'</td>
    ';

    if($sin["DIF_DIA"]<=0)
    {
        $act="UPDATE equipos set garantia=2 where garantia=1 AND id_equipo=$sin[id_equipo]";
        $listado=$conex->prepare($act);
        $listado->execute();
     


    }
}


$conex=null;


?>