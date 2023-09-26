<?php ob_start(); ?><?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <link rel="icon" type="image/png" href="../assets/img/soporte.png">
  <title>
    Soporte Técnico Polimérida
  </title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--     Fonts and icons     -->
  <link href="../plugins/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>
<?php $url= $_SERVER["REQUEST_URI"];?>
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <center><span class="ms-1 font-weight-bold text-white">Soporte Polimérida</span></center><div>
        <center><i class="material-icons opacity-10 text-white">person</i><span class="ms-1 font-weight-bold text-white"><?php echo $_SESSION['Correo']?></span></center>
        </div>
      </a>
    </div>
    
    <hr class="horizontal light mt-0 mb-4">
    <div class="navbar  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
        
          <?php if($url=="/proyectosoporte/GUI/inicio.php")
          {
            if($_SESSION['Roll']>=1)
            {
              echo '
            <a class="nav-link text-white active bg-gradient-primary" href="../GUI/inicio.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Inicio</span>
            </a>';
            }
            
          }else{
            if($_SESSION['Roll']>=1)
            {
              echo '<a class="nav-link text-white" href="../GUI/inicio.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>';
            }
            
          }
          ?>
        </li>
        <li class="nav-item">
          <?php if($url=="/proyectosoporte/GUI/departamento.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary"  href="../GUI/departamento.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">home</i>
                </div>
                <span class="nav-link-text ms-1">Departamentos</span>
              </a>';
            }
            
          }
          else{
            if($_SESSION['Roll']==1)
            {
              echo '
          <a class="nav-link text-white"  href="../GUI/departamento.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">Departamentos</span>
          </a>';

            }
            
          }
          ?>
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/usuarios.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
          <a class="nav-link text-white active bg-gradient-primary" href="../GUI/usuarios.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>';
            }
            
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/usuarios.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Usuarios</span>
            </a>';
            }
          }
          ?>
          <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/usuarios.php")
          {
            if($_SESSION['Roll']==2)
            {
              echo '
          <a class="nav-link text-white active bg-gradient-primary" href="../GUI/usuarios.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Mi perfil</span>
          </a>';
            }
            
          }else{
            if($_SESSION['Roll']==2)
            {
              echo '<a class="nav-link text-white" href="../GUI/usuarios.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Mi perfil</span>
            </a>';
            }
          }
          ?>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/equipos.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/equipos.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">mouse</i>
                </div>
                <span class="nav-link-text ms-1">Equipos y Dispositivos</span>
              </a>';
            }
           
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/equipos.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">mouse</i>
              </div>
              <span class="nav-link-text ms-1">Equipos y Dispositivos</span>
            </a>';
            }
           
          }
          ?>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/relaciones.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/relaciones.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">check</i>
                </div>
                <span class="nav-link-text ms-1">Relación Equipos</span>
              </a>';

            }
           
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/relaciones.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">check</i>
            </div>
            <span class="nav-link-text ms-1">Relación Equipos</span>
          </a>';
            }
            
          }
          ?>
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/asignaciones.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/asignaciones.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">computer</i>
                </div>
                <span class="nav-link-text ms-1">Asignacion Equipo</span>
              </a>';
            }
           
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/asignaciones.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">computer</i>
            </div>
            <span class="nav-link-text ms-1">Asignacion Equipo</span>
          </a>';
            }
            
          }
          ?>
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/asignaciones.php")
          {
            if($_SESSION['Roll']==2)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/asignaciones.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">computer</i>
                </div>
                <span class="nav-link-text ms-1">Mi Equipo</span>
              </a>';
            }
           
          }else{
            if($_SESSION['Roll']==2)
            {
              echo '<a class="nav-link text-white" href="../GUI/asignaciones.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">computer</i>
            </div>
            <span class="nav-link-text ms-1">Mi Equipo</span>
          </a>';
            }
            
          }
          ?>
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/ticket.php")
          {
            echo '
          <a class="nav-link text-white active bg-gradient-primary" href="../GUI/ticket.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">description</i>
            </div>
            <span class="nav-link-text ms-1">Crear Ticket</span>
          </a>';
          }else{
            echo '<a class="nav-link text-white" href="../GUI/ticket.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">description</i>
            </div>
            <span class="nav-link-text ms-1">Crear Ticket</span>
          </a>';
          }
          ?>
          </li>
          <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/paneltickets.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/paneltickets.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">checklist</i>
                </div>
                <span class="nav-link-text ms-1">Panel Tickets</span>
              </a>';
            }
          
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/paneltickets.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">checklist</i>
              </div>
              <span class="nav-link-text ms-1">Panel Tickets</span>
            </a>';
            }
           
          }
          ?>
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/reporte.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/reporte.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">report</i>
                </div>
                <span class="nav-link-text ms-1">Reportes</span>
              </a>';
            }
          
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/reporte.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">report</i>
              </div>
              <span class="nav-link-text ms-1">Reportes</span>
            </a>';

            }
           
          }
          ?>
        </li>
        <li class="nav-item">
        <?php if($url=="/proyectosoporte/GUI/inventario.php")
          {
            if($_SESSION['Roll']==1)
            {
              echo '
              <a class="nav-link text-white active bg-gradient-primary" href="../GUI/inventario.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">assignment</i>
                </div>
                <span class="nav-link-text ms-1">Inventarios</span>
              </a>';
            }
           
          }else{
            if($_SESSION['Roll']==1)
            {
              echo '<a class="nav-link text-white" href="../GUI/inventario.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Inventarios</span>
            </a>';
            }
          
          }
          ?>
        </li>
        <div class="mx-3">
        <a class="btn bg-gradient-info mt-4 w-100" href="../DAO/cierresesion.php" type="button">Salir</a>
      </div>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          </ol>
          <h4 class="font-weight-bolder mb-0">Dashboard</h4>
        </nav>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../DAO/cierresesion.php" class="nav-link text-body font-weight-bold px-0">
                <span class="d-sm-inline d-none" >
                  Cerrar sesión</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-2 d-flex align-items-center">
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->