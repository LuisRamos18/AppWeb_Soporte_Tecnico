<?php

$conex=Conexion::conectar();
$query="SELECT M.id_municipio,M.nombre_municipio,M.escudo,COUNT(DISTINCT(D.institucion))as 'numb'
FROM detalles D inner join municipios M on M.id_municipio=D.id_municipio GROUP BY D.id_municipio;";
$listado=$conex->prepare($query);
$listado->execute();
$listcounttic=$listado->fetchAll();

foreach($listcounttic as $counttic) 
{
    echo 
'<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
    <a class="text-decoration-none">
        <div class="cat-item d-flex align-items-center mb-4">
            <div class="overflow-hidden" style="width: 100px; height: 100px;">
            <form id="frmmunicipio" action="../TABLAS/tbl_ins_servicios.php" method="POST">
            <input src="'.$counttic["escudo"].'" style="width: 90px; height: 90px;" type="image"/>
            <input type="text" class="form-control" name="txtmunicipio" value="'.$counttic["id_municipio"].'" style="visibility:hidden" >
            </div>
            <div class="flex-fill pl-3">
                <h5>'.$counttic["nombre_municipio"].'</h5>
                <small class="text-body">'.$counttic["numb"].' Unidades</small>
                </form>
            </div>
        </div>
    </a>
</div>';
}

$conex=null;


?>