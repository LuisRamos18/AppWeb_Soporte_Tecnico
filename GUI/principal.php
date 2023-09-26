<?php include ('../master/header_quiosco.php');
$var=$_GET['var'];
$var2=$_GET['nom'];?>

<!-- links para exportar a PDF -->
<script src="../assets/js/plugins/html2pdf.bundle.min.js"></script>
<script src="../assets/js/plugins/jspdf.min.js"></script>

<body>
    <div class="container-fluid py-4">
      <div class="row mb-4">
      <div class="col-lg-12 col-md-8">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h1><?php echo $var2?></h1>
              <p class="text-sm">
              
              </p>
              <button id="btnExportar" class="btn btn-danger">
              <i class="fas fa-file-pdf"></i> Exportar en PDF</button>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text text-xxs font-weight-bolder opacity-7">INSTITUCIÓN</th>
                      <th class="text-uppercase text text-xxs font-weight-bolder opacity-7 ps-2">TIPO DE SERVICIO</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">MUNICIPIO</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">COMUNIDADES</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">DIRECCIÓN</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">TELEFÓNO</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">HORARIO</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">DESCRIPCIÓN</th>
                      <th class="text-center text-uppercase text text-xxs font-weight-bolder opacity-7">REQUISITOS</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tbl_tipos.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles del servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h3><label>Comunidades: <h3><label name="txtcomunidades"  id="txtcomunidades"></label></label>
      </hr>
      <h3><label>Dirección: <h3><label name="txtdireccion"  id="txtdireccion"></label></label>
      </hr>
      <h3><label>Telefóno: <h3><label name="txttelefono"  id="txttelefono"></label></label>
      </hr>
      <h3><label>Horario: <h3><label name="txthorario"  id="txthorario"></label></label>
      </hr>
      <h3><label>Descripción: <h3><label name="txtdescripcion"  id="txtdescripcion"></label></label>
      </hr>
      <h3><label>Requisitos: <h3><label name="txtrequisitos"  id="txtrequisitos"></label></label>
      </hr>
      </div>
    </div>
    
  </div>

</div>
</body>


<script src="../JS/modal.js"></script>
<script src="../JS/exportarpdf.js"></script>
<script src="../JS/buscarservicio.js"></script>
<?php include '../MASTER/footer_quiosco.php' ?>