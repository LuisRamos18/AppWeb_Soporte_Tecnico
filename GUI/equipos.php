<?php include ('../master/header.php');
include '../DAO/conex.php';?>

<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Registro Equipos y Dispositivos de Computo</h4>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form id="frmEquipo" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Equipo</label>
                      <input type="text" class="form-control is-valid" id="validation01" name="txtequipo" placeholder="ej: Mouse, PC" value="" required>
                      <label for="validation02">Modelo</label>
                      <input type="text" class="form-control is-valid" id="validation02" name="txtmodelo" placeholder="ej: BS2L" required>
                      <label for="validation03">Garantía</label>
                      <select class="form-select is-valid" name="cmbgarantia" aria-label="Default select example">
                          <option selected>Seleccione una opcion</option>
                          <option value="1">Sí</option>
                          <option value="2">No</option>
                        </select>
                        <label for="validation04">Sistema Operativo</label>
                        <select class="form-select is-valid" name="cmbso" aria-label="Default select example">
                        <?php include '../TABLAS/cmbSO.php' ?> 
                        </select>
                      <label class="miro-radiobutton">
                <input type="radio"  value="2" name="radio" checked>
                  <span>Periférico</span>
                   </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation05">Marca</label>
                        <select class="form-select is-valid" name="cmbmarca" aria-label="Default select example">
                        <?php include '../TABLAS/cmbmarcas.php' ?> 
                        </select>
                        <label for="validation06">Serial</label>
                        <input type="text" class="form-control is-valid" id="validation06" name="txtserie" placeholder="ej: SN1548" required>
                        <label for="validation07">Fecha límite</label>
                        <input type="date" class="form-control is-valid" id="validation07"  name="datelimite"placeholder="">
                        <label for="validation08">Dirección IP</label>
                        <input type="text" class="form-control is-valid" id="validation08" name="txtip" placeholder="ej:192.168.1.15" value="" required>
                        <label class="miro-radiobutton">
                        <input type="radio" value="1" name="radio" checked>
                       <span>Equipo</span>
                       </label>
                    </div>
                  </div>
                  <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="checkeset">
                <label class="form-check-label" for="flexCheckDefault">
                Antivirus ESET
                </label>
                <input class="form-check-input" type="checkbox" value="1" name="checksynology">
                <label class="form-check-label" for="flexCheckDefault">
                Synology
                </label>
                <input class="form-check-input" type="checkbox" value="1" name="checkoffice">
                <label class="form-check-label" for="flexCheckDefault">
                 Paquetería Office
                </label>
                <input class="form-check-input" type="checkbox" value="1" name="checksbp">
                <label class="form-check-label" for="flexCheckDefault">
                 SBP
                 </label>
                <input class="form-check-input" type="checkbox" value="1" name="checksap">
                <label class="form-check-label" for="flexCheckDefault">
                 SAP
                </div>
                  <label for="validation07">Características del Equipo</label>
                      <textarea name="txtcaracteristicas" rows="10" cols="40" class="form-control is-valid" id="validation07" placeholder="ej:RAM,HDD,procesador,etc." value="" required></textarea>
                  <div class="col-md-12" style="margin-top: 5px;">
                    <div class="form-check">
                  </div>
                    <div class="form-check">
                    </div>
                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success btn-lg" id="btnagregar" onclick="agregarequipo();">Agregar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Lista de Equipos</h6>
              <p class="text-sm">
              <?php include '../TABLAS/tblcountequipos.php' ?>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NOMBRE EQUIPO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TIPO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SERIAL</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DIRECCIÓN IP</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SISTEMA OPERATIVO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../TABLAS/tblequipos.php' ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- Modal Eliminar -->
<form id="frmEliminarEquipo" method="POST">
<div class="modal fade" id="modaleliminarequi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
        <label for="exampleInputEmail1" id="lblIde" name="lblIde"></label>¿Estás seguro que desea eliminar este equipo?
        </body>
      <input type="text" class="form-control" id="txtEqui" name="txtEqui" required>
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarequipo();">Eliminar</button>
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php include '../MASTER/footer.php' ?>

<!-- Modal Modificar -->
<form id="frmModificarEquipo" method="POST">
<div class="modal fade" id="modalmodificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualización Equipos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="card-body px-0 pb-2">
              <form id="frmEquipo" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Equipo</label>
                      <input type="text" class="form-control is-valid" id="txtequipo" name="txtequipo"  required>
                      <label for="validation02">Modelo</label>
                      <input type="text" class="form-control is-valid" id="txtmodelo" name="txtmodelo"  required>
                      <label for="validation03">Garantía</label>
                      <select class="form-select is-valid" name="cmbgarantia" id="cmbgarantia" aria-label="Default select example">
                          <option value="1">Sí</option>
                          <option value="2">No</option>
                        </select>
                        <label for="validation04">Sistema Operativo</label>
                        <select class="form-select is-valid" name="cmbso" id="cmbso" aria-label="Default select example">
                        <?php include '../TABLAS/cmbSO.php' ?>   
                        </select>
                      <label class="miro-radiobutton">
                <input type="radio"  value="2" name="radio" checked>
                  <span>Periférico</span>
                   </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation05">Marca</label>
                        <select class="form-select is-valid" name="cmbmarca" id="cmbmarca" aria-label="Default select example">
                        <?php include '../TABLAS/cmbmarcas.php' ?> 
                        </select>
                        <label for="validation06">Serial</label>
                        <input type="text" class="form-control is-valid" id="txtserie" name="txtserie" required>
                        <label for="validation07">Fecha límite</label>
                        <input type="date" class="form-control is-valid" id="datelimite" name="datelimite">
                        <label for="validation08">Dirección IP</label>
                        <input type="text" class="form-control is-valid" id="txtip" name="txtip" required>
                        <label class="miro-radiobutton">
                        <input type="radio" value="1" name="radio" checked>
                       <span>Equipo</span>
                       </label>
                    </div>
                  </div>
                  <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="checkeset">
                <label class="form-check-label" for="flexCheckDefault">
                Antivirus ESET
                </label>
                <input class="form-check-input" type="checkbox" value="1" name="checksynology">
                <label class="form-check-label" for="flexCheckDefault">
                Synology
                </label>
                <input class="form-check-input" type="checkbox" value="1" name="checkoffice">
                <label class="form-check-label" for="flexCheckDefault">
                 Paquetería Office
                </label>
                <input class="form-check-input" type="checkbox" value="1" name="checksbp">
                <label class="form-check-label" for="flexCheckDefault">
                 SBP
                 </label>
                <input class="form-check-input" type="checkbox" value="1" name="checksap">
                <label class="form-check-label" for="flexCheckDefault">
                 SAP
                </div>
                  <label for="validation07">Características del Equipo</label>
                      <textarea name="txtcaracteristicas" rows="10" cols="40" class="form-control is-valid" id="txtcaracteristicas" name="txtcaracteristicas"  required></textarea>
                  <div class="col-md-12" style="margin-top: 5px;">
                    <div class="form-check">
                  </div>
                    <div class="form-check">
                    </div>
                  </div>
                  <input type="text" class="form-control is-valid" name="lblDesc" id="lblDesc" style="visibility:hidden" required>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success btn" id="btnagregar" onclick="actualizarequipo();">Actualizar</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
</form>

<script src="../JS/selectequipo.js"></script>
<script src="../JS/crudEquipos.js"></script>