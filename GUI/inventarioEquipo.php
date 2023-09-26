<?php include ('../master/header.php');

?>
<div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Todos los Equipos</h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcountEquipoinventario.php' ?> 
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">EQUIPO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">MARCA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MODELO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SERIE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE REGISTRO</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_Equipos.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


<?php include '../MASTER/footer.php' ?>