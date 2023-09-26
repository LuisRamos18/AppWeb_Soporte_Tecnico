<?php include ('../master/header.php')?>

<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                <h4>Registro Departamentos</h4>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form id="frmDepartamento" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Departamento</label>
                      <input type="text" class="form-control is-valid" name="txtdepartamento" placeholder="ej: Sistemas" value="" required>
                      <label for="validation02">Ubicación</label>
                      <select class="form-select is-valid" name="cmbubicacion" aria-label="Default select example">
                      <?php include '../TABLAS/cmbubicacion.php';?>
                          </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation03">CECO</label>
                        <input type="text" class="form-control is-valid" name="numseco" placeholder="ej:1800" value="" required>
                    </div>
                  </div>
                  <div class="col-md-12" style="margin-top: 5px;">
                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success btn-lg" id="btnagregar" onclick="agregardepa();">Agregar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Lista de Departamentos</h6>
              <p class="text-sm">
                <?php include '../TABLAS/tblcountdepa.php';?>
              </p>
            </div>
          
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CECO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Departamento</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">UBICACIÓN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tbldepartamento">
                <?php include '../TABLAS/tbldepartamento.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<?php include '../MASTER/footer.php' ?>

<!-- Modal Eliminar -->
<form id="frmEliminarDepa" method="POST">
<div class="modal fade" id="modaleliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación Departamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
        <label for="exampleInputEmail1" id="lblId" name="lblId"></label>¿Está seguro que desea eliminar este departamento?
        </body>
      <input type="text" class="form-control" id="txtDesc" name="txtDesc" required>
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminardepa();">Eliminar</button>
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal Modificar -->
<form id="frmModificarDepa" method="POST">
<div class="modal fade" id="modalmodificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualización Departamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="card-body px-0 pb-2">
              <form id="frmDepartamento" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Departamento</label>
                      <input type="text" class="form-control is-valid" name="txtdepartamento"  id="txtdepartamento" required>
                      <label for="validation02">Ubicación</label>
                      <select class="form-select is-valid" name="cmbubicacion" id="cmbubicacion" value="cmbubicacion" aria-label="Default select example">
                          <option value="1">Oficina</option>
                          <option value="2">Planta</option>
                          </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation03">CECO</label>
                        <input type="text" class="form-control is-valid" name="numseco" id="numseco" required>
                    </div>
                    <label for="validation04"></label>
                      <input type="text" class="form-control is-valid" name="txtde" id="txtde" style="visibility:hidden" required>
                  </div>
                  <div class="col-md-12" style="margin-top: 5px;">
                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success" id="btnagregar" onclick="actualizardepa();">Actualizar</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      
</form>


<script src="../JS/crudDepartamentos.js"></script>