<?php include ('../master/header.php');
include '../DAO/conex.php';
?>

<?php if ($_SESSION['Roll']==1){
  echo'
<div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Registro Usuarios</h4>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form id="frmUsuario" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Usuario</label>
                      <input type="text" class="form-control is-valid" id="validation01" name="txtusuario" placeholder="Usuario" value="" required>
                      <label for="validation02">Nombre(s)</label>
                      <input type="text" class="form-control is-valid" id="validation02" name="txtnombre" placeholder="Nombre" value=""  required>
                      <label class="miro-radiobutton">
                     <input type="radio"  value="1" name="radio" checked>
                     <span>Administrador</span>
                     </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation03">Departamento</label>
                        <select class="form-select is-valid" name="cmbdepartamento" aria-label="Default select example">
                          <option selected>Seleccione una opcion</option>';
                              include ('../TABLAS/cmbdepa.php');
                        echo '
                        </select> 
                        <label for="validation04">Apellido(s)</label>
                      <input type="text" class="form-control is-valid" id="validation03" name="txtapellido" placeholder="Apellido" value="" required>
                      <label class="miro-radiobutton">
                      <input type="radio"  value="2" name="radio" checked>
                      <span>Usuario</span>
                   </label>
                    </div>
                  </div>
                  <div class="col-md-12" style="margin-top: 5px;">
                    <div class="form-check">
                  </div>
                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success btn-lg" id="btnagregar" onclick="agregarusuario();">Agregar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Lista de Usuarios</h6>
              <p class="text-sm">';
               include ('../TABLAS/tblcountusuario.php');
              echo '</p>
            </div>
         
            <div class="card-body p-3">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">USUARIO</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NOMBRE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DEPARTAMENTO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tbluser">';

                 include ('../TABLAS/tblusuario.php');
                 echo'
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>';}
else{
  echo'
  <div class="container-fluid py-4">
        <div class="row mb-4">
          <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h4>Mi Perfil</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <form id="frmUsuario" method="POST">
                  <div class="container row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="validation01">Usuario</label>
                        <input type="text" class="form-control is-valid" id="validation01" name="txtusuario" value='.$_SESSION['Usuario'].' readonly="readonly">';
                        echo'
                        <label for="validation02">Nombre(s)</label>
                        <input type="text" class="form-control is-valid" id="validation02" name="txtnombre" value='.$_SESSION['Nombre'].' readonly="readonly">';
                        echo'
                        <label class="miro-radiobutton">
                       <input type="radio"  value="1" name="radio" checked>
                       <span>Administrador</span>
                       </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="validation03">Departamento</label>
                          <input type="text" class="form-control is-valid" id="validation03" name="depa"  value='.$_SESSION['Departamento'].' readonly="readonly">';
                          echo '
                          </select> 
                          <label for="validation04">Apellido(s)</label>
                          <input type="text" class="form-control is-valid" id="validation04" name="lastname" value='.$_SESSION['Apellido'].' readonly="readonly">';
                          echo'
                        <label class="miro-radiobutton">
                        <input type="radio"  value="2" name="radio" checked>
                        <span>Usuario</span>
                     </label>
                      </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 5px;">
                      <div class="form-check">
                    </div>
                    </div>
                    <hr style="margin-top:10px;">
                    <div class="col-md-12" style="text-align:center;">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="card h-100">
              <div class="card-header pb-0">
               <center><img src="https://us.123rf.com/450wm/imagevectors/imagevectors1701/imagevectors170100177/68560920-icono-de-perfil-blanco-en-el-bot%C3%B3n-web-azul.jpg?ver=6" width="250" height="250"></center> 
              <center> <label>Correo:'.$_SESSION['Correo'].' </label></center>
               </div>
              
            </div>
  </div>';
}
?>
<?php include '../MASTER/footer.php' ?>

<!-- Modal Eliminar -->
<form id="frmEliminarUsuario" method="POST">
<div class="modal fade" id="modaleliminaruse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <body>
        <label for="exampleInputEmail1" id="lblIdu" name="lblIdu"></label>¿Está seguro que desea eliminar este usuario?
        </body>
      <input type="text" class="form-control" id="txtUse" name="txtUse" required>
      </div>
      <div class="col-md-12"style="text-align:center;">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="eliminarusuario();">Eliminar</button>
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal Modificar -->
<form id="frmModificarUse" method="POST">
<div class="modal fade" id="modalmodificaruse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualización Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="card-body px-0 pb-2">
              <form id="frmUsuario" method="POST">
                <div class="container row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="validation01">Usuario</label>
                      <input type="text" class="form-control is-valid" name="txtusuario" id="txtusuario"  required>
                      <label for="validation02">Nombre(s)</label>
                      <input type="text" class="form-control is-valid" name="txtnombre" id="txtnombre"  required>
                     <label class="miro-radiobutton">
                     <input type="radio" value="1" name="radioroll" id="radioroll" checked>
                     <label for="1">Administrador</label>
                     </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validation03">Departamento</label>
                        <select class="form-select is-valid" name="cmbdepartamento" id="cmbdepartamento" aria-label="Default select example">
                        <?php include '../TABLAS/cmbdepa.php' ?>
                          </select>
                        <label for="validation04">Apellido(s)</label>
                      <input type="text" class="form-control is-valid" name="txtapellido" id="txtapellido"  required>
                      <label class="miro-radiobutton">
                      <input type="radio" value="2" name="radioroll" id="radioroll" checked>
                      <label for="2">Usuario</label>
                   </label>
                   <input type="text" class="form-control is-valid" name="txtid" id="txtid" style="visibility:hidden" required>
                    </div>
                  </div>
                  <div class="col-md-12" style="margin-top: 5px;">
                    <div class="form-check">
                  </div>
                  </div>
                  <hr style="margin-top:10px;">
                  <div class="col-md-12" style="text-align:center;">
                  <button type="button" class="btn btn-success" id="btnagregar" onclick="actualizaruser();">Actualizar</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>



<script src="../JS/crudUsuario.js"></script>