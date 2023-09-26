<?php include ('../master/header.php');
include '../DAO/conex.php';
?>
<div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Tickets En Proceso</h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcount_Ticketsproceso.php' ?>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SOLICITA</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DEPARTAMENTO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CATEGORÍA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MOTIVO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE INICIO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ATIENDE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VER</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_Ticketproceso.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<form id="frmTerminar" method="POST">
<div class="modal fade" id="modalproceso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ticket en proceso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label>Descripción:</label>
        <label class="form-control" id="lblDes" name="lblDes"></label>
        <label>Folio:</label>
       <input type="text" class="form-control" id="txtPro" name="txtPro" required>
       <label for="validation01">Solución</label>
      <textarea name="txtsolucion" rows="10" cols="40" class="form-control is-valid"  value="" required></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnterminar" onclick="terminar();">Finalizar</button> 
      </div>
    </div>
  </div>
</div>
</form>

<?php include '../MASTER/footer.php' ?>
<script src="../JS/ticketproceso.js"></script>
<script src="../JS/crudTerminar.js"></script>

