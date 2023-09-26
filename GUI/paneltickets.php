<?php include ('../master/header.php')

?>

 
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">note</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/ticketsAbiertos.php">Tickets no Asignados</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcount_TicketAbiertos.php' ?></h4>
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
                <i class="material-icons opacity-10">book</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/ticketsAsignados.php">Tickets Asignados</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcount_TicketAsinados.php' ?></h4>
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
                <i class="material-icons opacity-10">work</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/ticketsProceso.php">Tickets en Proceso</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcount_Ticketsproceso.php' ?></h4>
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
                <i class="material-icons opacity-10">check</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize"><a href="../GUI/ticketsResueltos.php">Tickets Resueltos</a></p>
                <h4 class="mb-0"><?php include '../TABLAS/tblcount_ticketresuelto.php' ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Todos los Tickets</h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcount_Ticketdia.php' ?> 
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USUARIO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DEPARTAMENTO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CATEGORIA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MOTIVO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA Y HORA DE CREACIÓN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_Tickets.php' ?> 
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


<?php include '../MASTER/footer.php' ?>