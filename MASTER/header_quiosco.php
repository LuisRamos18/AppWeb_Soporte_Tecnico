

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quiosco-Polimérida</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="icon" type="image/png" href="../assets/img/poli.png">

    <!-- Customized Bootstrap Stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
</head>

<body>

   <!-- Navbar Start -->
   
   <div class="container-fluid bg-light mb-20">
        <div class="row px-xl-2">
        <img src="../assets/img/polimerida2.png" width="280" height="70">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                            <h2><a href="../GUI/index.php" class="nav-item nav-link">Catálogo</a></h2>
                            <h2><a href="../GUI/sesion.php" class="nav-item nav-link">Iniciar Sesión</a></h2>
                            <div class="nav-item dropdown">
                            </div>
                            <div class="nav-item dropdown">
                            <h2><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tipos de Servicios <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0">
                                <?php include '../TABLAS/tbl_servicios.php' ?>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                            <h2><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacto <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0">
                                <h2><a  class="dropdown-item">Correo: reclutamientorh@polimerida.com </a>
                                <h2><a  class="dropdown-item">Tel: EXT 126 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>
<!-- Navbar End -->