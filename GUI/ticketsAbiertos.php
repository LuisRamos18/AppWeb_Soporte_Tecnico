<?php include ('../master/header.php')

?>

<div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Tickets Sin Asignación</h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcount_TicketAbiertos.php' ?>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USUARIO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DDEPARTAMENTO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CATEGORIA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MOTIVO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE CREACIÓN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ASIGNAR</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_Ticketabierto.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- Modal -->
<form id="frmAsignar" method="POST">
<div class="modal fade" id="modalasignar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label >Descripción:</label>
        <label class="form-control" id="lblDesc" name="lblDesc"></label>
        <label >Folio:</label>
       <input type="text" class="form-control" id="txtDesc" name="txtDesc" required>
      </div>
      <label for="validation01">Asignar a:</label>
      <select class="form-select is-valid" name="cmbidusuario" aria-label="Default select example">
      <?php include '../TABLAS/cmbtecnicos.php' ?>   
      </select>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btniniciar" onclick="agregarsin();">Asignar</button> 
      </div>
    </div>
  </div>
</div>
</form>

<?php include '../MASTER/footer.php' ?>
<script src="../JS/selectasig.js"></script>
<script src="../JS/crudAsigTk.js"></script>