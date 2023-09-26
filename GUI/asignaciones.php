<?php include ('../master/header.php');
include '../DAO/conex.php';

$conex=Conexion::conectar();?>

<?php if ($_SESSION['Roll']==1){
  echo'
<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Asignación de Equipos</h4>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form id="frmAsignar" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Equipo</label>
                      <select class="form-select is-valid" name="cmbequipo" aria-label="Default select example">';
                      include ('../TABLAS/cmbasignacionrelacion.php');
                      echo '   
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation02">Usuario</label>
                        <select class="form-select is-valid" name="cmbidusuario" aria-label="Default select example">';
                        include ('../TABLAS/cmbasignacionusuario.php');
                        echo ' 
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12" style="margin-top: 5px;">
                
                    <div class="form-check">
                   
                  </div>
                    <div class="form-check">
                   
                    </div>

                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success btn-lg" id="btnagregar" onclick="agregarasignacion();">Agregar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Lista de Usuarios con Equipos</h6>
              <p class="text-sm">';
              include ('../TABLAS/tblcountasignaciones.php');
              echo '
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USUARIO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">EQUIPO ASIGNADO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SERIAL</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>';
                include ('../TABLAS/tblasignacionequipos.php');
                echo ' 
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>';}
else{
  echo'
  <div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
                    <h4>Equipo(s) Asignado(s)</h4>
                  </div>
                  <center><img src="https://images.vexels.com/media/users/3/135729/isolated/preview/d09f185e1e94cbc95cfbba1808a0cbdc-icono-de-computadora-plana.png" width="150" height="150"></center> 
                </div>
              </div>
      <div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <div class="card-body p-3">
                      <div class="table-responsive">
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE EQUIPO</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MARCA</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MODELO</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SERIAL</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VER PERIFÉRICOS</th>
                          </tr>
                      </thead>
                      <tbody>';
                      include ('../TABLAS/tblasignacionequipos.php');
                      echo ' 
                      </tbody>
                    </table>
                   </div>
                  </div>';
}?>

<!-- Modal Eliminar -->
<form id="frmEliminarAsi" method="POST">
<div class="modal fade" id="modaleliminarasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deshacer Asignación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
        <label for="exampleInputEmail1" id="lblId" name="lblId"></label>¿Estás seguro que desea deshacer esta asignación?
        </body>
      <input type="text" class="form-control" id="txtAsi" name="txtAsi" required>
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarasi();">Eliminar</button>
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal Perifericos -->
<form id="#modalperiferico" method="POST">
<div class="modal fade" id="modalperiferico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Periféricos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
              <div class="card-body p-3">
                      <div class="table-responsive">
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE PERIFERICO</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MARCA</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MODELO</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SERIAL</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                   </div>
                  </div>
        </body>
      <input type="text" class="form-control" id="txtAsi" name="txtAsi" required>
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarasi();">Eliminar</button>
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php include '../MASTER/footer.php' ?>
<script src="../JS/crudAsignacion.js"></script>