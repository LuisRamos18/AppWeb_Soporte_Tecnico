<?php
include '../DAO/conex.php';
$conex=Conexion::conectar();
$query="SELECT id_equipo,nombre_equipo,serie,fecha_ingreso,fecha_limite,fecha_baja,ip, 
(select case when tipo=1 then 'Equipo' when tipo=2 then 'Periférico' end as 'Tipo')as'Tipo', 
(select case when garantia=1 then 'SI' when garantia=2 then 'NO' end as 'Garantia')as 'Garantia', 
(select case when eset=0 then 'NO' when eset=1 then 'SI' end as 'Eset')as'Eset', 
(select case when synology=0 then 'NO' when tipo=1 then 'SI' end as 'Synology')as'Synology', 
(select case when office=0 then 'NO' when tipo=1 then 'SI' end as 'Office')as'Office', 
(select case when sbp=0 then 'NO' when sbp=1 then 'SI' end as 'SBP')as'SBP', 
(select case when sap=0 then 'NO' when sap=1 then 'SI' end as 'SAP')as'SAP', 
(select case when estado='V' then 'Vigente' when estado='A' then 'Asignado' when estado='B' then 'Baja' end as 'Tipo')as 'Estado' ,modelo,marca,sistema from equipos E 
inner join marcas M on M.id_marca=E.id_marca inner join so S on S.id_so=E.so;";
$listado=$conex->prepare($query);
$listado->execute();
$listrepo=$listado->fetchAll();

foreach($listrepo as $repo) 
{
    echo 
    '
    <tr>
    <td>'.$repo["id_equipo"].'</td>
    <td>'.$repo["nombre_equipo"].'</td>
    <td>'.$repo["serie"].'</td>
    <td>'.$repo["ip"].'</td>
    <td>'.$repo["modelo"].'</td>
    <td>'.$repo["sistema"].'</td>
    <td>'.$repo["Tipo"].'</td>
    <td>'.$repo["marca"].'</td>
    <td>'.$repo["fecha_ingreso"].'</td>
    <td>'.$repo["Garantia"].'</td>
    <td>'.$repo["fecha_limite"].'</td>
    <td>'.$repo["Eset"].'</td>
    <td>'.$repo["Synology"].'</td>
    <td>'.$repo["Office"].'</td>
    <td>'.$repo["SBP"].'</td>
    <td>'.$repo["SAP"].'</td>
    <td>'.$repo["Estado"].'</td>
    <td>'.$repo["fecha_baja"].'</td>
    </tr>
    ';
}

$conex=null;


?>