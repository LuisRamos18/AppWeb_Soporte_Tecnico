<?php include ('../master/header.php');
include '../DAO/conex.php';
?>
<div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Tickets Resueltos</h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcount_ticketresuelto.php' ?>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SOLICITA</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DEPARTAMENTO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CATEGORÍA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MOTIVO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE RESOLUCIÓN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ATENDIÓ</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VER SOLUCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_Ticketsresueltos.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<form id="frmIniciar" method="POST">
<div class="modal fade" id="modalResuelto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solución del Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label>Folio:</label>
      <input type="text" class="form-control" id="txtDesc" name="txtDesc" required>
        <label class="form-control" id="lblDesc" name="lblDesc"></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btniniciar" onclick="();">Cerrar</button> 
      </div>
    </div>
  </div>
</div>
</form>

<?php include '../MASTER/footer.php' ?>
<script src="../JS/selectresuelto.js"></script>

