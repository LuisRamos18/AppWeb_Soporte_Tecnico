<?php include ('../master/header.php');
include '../DAO/conex.php';?>


<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/reporteUsuario.php">Por Usuario</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcountusuario.php' ?>
                <h4 class="mb-0"></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">house</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/reporte_Departamento.php">Por Departamento</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcountdepa.php' ?>
                <h4 class="mb-0"></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">description</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/reporteTicket.php">Por Ticket</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcountticket.php' ?>
                <h4 class="mb-0"></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
             
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">computer</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/reporteEquipos.php">Por Equipo</p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcount_reporte_equipos.php' ?>
                <h4 class="mb-0"></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Reportes</h6>
              <p class="text-sm">
              
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
                
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<?php include '../MASTER/footer.php' ?>