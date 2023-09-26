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
              <h6>Reporte por Equipos</h6>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID EQUIPO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NOMBRE EQUIPO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SERIE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IP</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MODELO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SISTEMA OPERATIVO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TIPO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MARCA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE REGISTRO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">GARANTÍA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA LÍMITE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESET</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SYNOLOGY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">OFFICE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SBP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SAP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE BAJA</th>
                     
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_reporteEquipo.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<script src="../JS/exportar.js"></script>
<?php include '../MASTER/footer.php' ?>
