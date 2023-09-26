<?php include ('../master/header.php')?>
<!-- links para exportar a excel -->
<script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

<div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Reporte por Departamentos</h6>
              <p class="text-sm">
              </p>
              <button id="btnExportar" class="btn btn-success">
              <i class="fas fa-file-excel"></i> Exportar a Excel</button>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID DEPARTAMENTO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DEPARTAMENTO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">UBICACIÓN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CECO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USUARIOS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TICKETS GENERADOS</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_reporteDepa.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<script src="../JS/exportardepa.js"></script>
<?php include '../MASTER/footer.php' ?>