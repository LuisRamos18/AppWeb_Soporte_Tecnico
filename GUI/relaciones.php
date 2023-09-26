<?php include ('../master/header.php')?>

<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Relación de Equipos</h4>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form id="frmRelacion" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Periférico</label>
                      <select class="form-select is-valid" name="cmbdispositivo" aria-label="Default select example">
                      <?php include '../TABLAS/cmbrelacionDispositivo.php' ?>   
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation02">Equipo</label>
                        <select class="form-select is-valid" name="cmbequipo" aria-label="Default select example">
                        <?php include '../TABLAS/cmbrelacionEquipo.php' ?>   
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
                  <button type="button" class="btn btn-success btn-lg" id="btnagregar" onclick="agregarRelacion();">Agregar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Lista de Relaciones
                Equipo - Periférico
              </h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcountRelaciones.php' ?>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">EQUIPO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SERIAL</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PERIFÉRICO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SERIAL</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tblrelacion.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- Modal Eliminar -->
<form id="frmEliminarRel" method="POST">
<div class="modal fade" id="modaleliminarRel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deshacer Relación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
        <label for="exampleInputEmail1" id="lblIde" name="lblIde"></label>¿Estás seguro que desea deshacer esta relación?
        </body>
      <input type="text" class="form-control" id="txtRel" name="txtRel" required>
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarRel();">Eliminar</button>
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>


<?php include '../MASTER/footer.php' ?>
<script src="../JS/crudRelacion.js"></script>