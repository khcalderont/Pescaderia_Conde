
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pescadería Conde</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<?php
require ('conex.php'); // Conexión a la BD
session_start();

if(isset($_SESSION['usuario'])){
	$usuario=$_SESSION['usuario'];
} else{
	$usuario="";
}
?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->


    
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                <img src="img/logo2.jpg" alt="" width="80%">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="inicio.php">Inicio</a></li>
                                        <li><a href="mvision.php">Misión y visión</a></li>
                                        <li><a href="productos.php">Productos</a></li>
                                        <li><a href="#">Crear <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="creartipo.php">Crear tipo de pescado</a></li>
                                                <li><a href="crearpescado.php">Crear registro pescado</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Consultar <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                 <li><a href="contipo.php">Consultar tipo de pescado</a></li>
                                                 <li><a href="conpescado.php">Consultar pescado</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contacto.php">Contacto</a></li>
                                        <li><a href="salir.php">Cerrar Sesión</a></li>
                                        <li><a><strong>
	<?php
		if($usuario==""){
			echo"<script> window.location='index.php' </script>";
		} else{
			echo  $_SESSION['usuario'];
		}
		
	?>
                                        </strong>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 black_overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center ">
                                <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s"><br>
                                   </h3>
                                <div class="video_service_btn wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 black_overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center ">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- photography_skill_area  -->
   

<br>
<br>
<br>



    <!-- wild_photography  -->
    <div class="wild_photography">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center ">
                <div class="col-lg-6">
                    <div class="wildlife_photo">
                        <img src="img/bacalao.jpg" alt="" id="imgs" align="rigth">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3 id="p">Gadus morhua / Bacalao</h3>
                        <p id="p">El bacalao común, bacalao del Atlántico o bacalao de Noruega (Gadus morhua) es una de las cerca de 60 especies de una misma familia de peces migratorios. Vive en mares fríos del norte. Por lo general el bacalao del atlántico es de tamaño pequeño, aunque algunos ejemplares pueden llegar a alcanzar los cien kilogramos de peso con un tamaño de hasta casi dos metros. Se alimenta de otros peces más pequeños, como el arenque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /wild_photography  -->

    

 
    

    <br>
    <br>
    <br>


    
 

  

    <!-- footer start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-8">
                        <p class="copy_right ">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kebin Calderon | SENA/Yamboro <i class="fa fa-heart-o" aria-hidden="true"></i>
<br></br>
<br></br>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                   
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>