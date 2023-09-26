<?php
include '../DAO/conex.php';
include '../MASTER/header_quiosco.php';


if(!empty($_POST['txtmunicipio']))
{
    $conn=Conexion::conectar();
    $MUN=$_POST['txtmunicipio'];
    $query="SELECT DISTINCT institucion, significado, imagen, id_municipio FROM detalles WHERE id_municipio=$MUN;";
    $listado=$conn->prepare($query);
    $listado->execute();
    $listcounttic=$listado->fetchAll();

    echo'<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Unidades de Servicios</span></h2>
    <div class="row px-xl-5">';

    foreach($listcounttic as $counttic) 
    {
     echo '

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-20" src="'.$counttic["imagen"].'" >
                        <div class="product-action">
                        <form id="frmInstitucion" method="POST">
                        <a class="btn btn-outline-dark btn-square" onclick="buscar('.$counttic['id_municipio'].',\''.$counttic['institucion'].'\');"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                    <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" >'.$counttic["institucion"].'</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>'.$counttic["significado"].'</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
    echo'</div>
    </div>';
    echo'
    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="../JS/buscarinstitucion.js"></script>
</body>

</html>';

}

$conex=null;


?>
