
<?php
include ('../master/header.php');
include '../DAO/conex.php';
$conex = Conexion::conectar();




?>

<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Crear Nuevo Ticket</h4>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="..GUI/email.php" id="frmTicket" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Usuario</label>
                      <select class="form-control is-valid" name="cmbusuario" readonly="readonly" >
                      <option value="<?php echo $_SESSION['idUsu'];?>"><?php echo $_SESSION['Usuario'];?></option>
                      </select>
                        <label for="validation03">Ubicación</label>
                        <input type="text" class="form-control is-valid" id="validation03" name="txtubicacion" placeholder="ej:Oficina RH" value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="validation02">Categoría</label>
                      <select class="form-select is-valid" name="cmbcategoria" aria-label="Default select example">
                        <?php include '../TABLAS/cmbcategoria.php' ?> 
                        </select>
                        <label for="validation04">Motivo</label>
                        <input type="text" class="form-control is-valid" id="validation04" name="txtmotivo" placeholder="ej:Paqueteria office" required> <br> 
                    </div>
                  </div>
                 
                  <label for="validation05">Descripción del problema, falla o servicio que requiere:</label>
                      <textarea name="txtdescripcion" rows="10" cols="40" class="form-control is-valid"  value="" required></textarea>
                  <div class="col-md-12" style="margin-top: 5px;">
                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success btn-lg" id="btnagregar" onclick="agregarticket();">Agregar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php
        if ($_SESSION['Roll']==1){
          echo '
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Lista de Tickets</h6>
              <p class="text-sm">';
              include ('../TABLAS/tblcountticket.php');
              echo ' 
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID TICKET</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">USUARIO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CATEGORÍA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">INFORMACIÓN</th>
                    </tr>
                </thead>
                <tbody>';
                include ('../TABLAS/tbltickets.php');
                echo '
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>';}
else{
  echo '
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Mis Tickets</h6>
              <p class="text-sm">';
              include ('../TABLAS/tblcountticket.php');
              echo ' 
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FOLIO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CATEGORÍA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                    </tr>
                </thead>
                <tbody>';
                include ('../TABLAS/tbltickets.php');
                echo '
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>';
}?>

<!-- Modal Información -->
<form id="frmInfoTicket" method="POST">
<div class="modal fade" id="modalticket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
        <label for="exampleInputEmail1" id="validation1" name="validation1"></label>Descripción de este ticket:
        </body>
        <label for="exampleInputEmail1" id="lblDesc" name="lblDesc">
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>
</form>

<script src="../JS/selectdescripcion.js"></script>
<?php include '../MASTER/footer.php' ?>
<script src="../JS/crudTicket.js"></script>